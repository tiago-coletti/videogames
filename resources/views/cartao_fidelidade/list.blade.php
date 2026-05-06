@extends('main')
@section('titulo', 'Listagem de Cartões Fidelidade')
@section('conteudo')

    <h4>Listagem de Cartões Fidelidade</h4>

    <div class="row">
        <div class="col">
            <form action="{{ route('cartao.search') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Tipo</label>
                        <select name="tipo" class="form-select">
                            <option value="codigo_cartao">Código</option>
                            <option value="pontos">Pontos</option>
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
                        <a href="{{ url('cartao/create') }}" class="btn btn-success"> Novo</a>
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
                        <th scope="col">Código</th>
                        <th scope="col">Pontos</th>
                        <th scope="col">Validade</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Ação</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->codigo_cartao }}</td>
                            <td>{{ $item->pontos }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->data_validade)->format('d/m/Y') }}</td>
                            <td>{{ $item->cliente->nome ?? 'Sem Cliente' }}</td>
                            <td><a href="{{ route('cartao.edit', $item->id) }}" class="btn btn-warning">Editar</a></td>
                            <td>
                                <form action="{{ route('cartao.destroy', $item->id) }}" method="post">
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
