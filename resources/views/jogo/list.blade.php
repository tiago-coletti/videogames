@extends('main')
@section('titulo', 'Listagem de jogos')
@section('conteudo')

    <h4>Listagem de Jogos</h4>

    <div class="row">
        <div class="col">
            <form action="{{ route('jogo.search') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-md-3">
                        <label class="form-label">Tipo</label>
                        <select name="tipo" class="form-select">
                            <option value="titulo">Título</option>
                            <option value="preco">Preço</option>
                            <option value="data_lancamento">Data de Lançamento</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Valor</label>
                        <input type="text" class="form-control" name="valor" placeholder="Pesquisar...">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary"> Buscar</button>
                    </div>
                    <div class="col-md-3">
                        <a href="{{ url('jogo/create') }}" class="btn btn-success"> Novo</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Data Lançamento</th>
                        <th scope="col">Plataforma (ID)</th>
                        <th scope="col">Desenvolvedora (ID)</th>
                        <th scope="col">Ação</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->titulo }}</td>
                            <td>{{ $item->preco }}</td>
                            <td>{{ $item->data_lancamento }}</td>
                            <td>{{ $item->plataforma_id }}</td>
                            <td>{{ $item->desenvolvedora_id }}</td>
                            <td><a href="{{ route('jogo.edit', $item->id) }}" class="btn btn-warning">Editar</a></td>
                            <td>
                                <form action="{{ route('jogo.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Deseja remover o registro?')">
                                        Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop
