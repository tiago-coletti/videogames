@extends('main')
@section('titulo', 'Listagem de vendas')
@section('conteudo')

    <h4>Listagem de Vendas</h4>

    <div class="row">
        <div class="col">
            <form action="{{ route('venda.search') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-md-3">
                        <label class="form-label">Tipo</label>
                        <select name="tipo" class="form-select">
                            <option value="cliente_id">ID do Cliente</option>
                            <option value="vendedor_id">ID do Vendedor</option>
                            <option value="jogo_id">ID do Jogo</option>
                            <option value="data_venda">Data da Venda</option>
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
                        <a href="{{ url('venda/create') }}" class="btn btn-success"> Novo</a>
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
                        <th scope="col">Cliente</th>
                        <th scope="col">Vendedor</th>
                        <th scope="col">Jogo</th>
                        <th scope="col">Data da Venda</th>
                        <th scope="col">Valor Total</th>
                        <th scope="col">Ação</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->cliente->nome ?? $item->cliente_id }}</td>
                            <td>{{ $item->vendedor->nome ?? $item->vendedor_id }}</td>
                            <td>{{ $item->jogo->nome ?? $item->jogo_id }}</td>
                            <td>{{ $item->data_venda }}</td>
                            <td>{{ $item->valor_total }}</td>
                            <td><a href="{{ route('venda.edit', $item->id) }}" class="btn btn-warning">Editar</a></td>
                            <td>
                                <form action="{{ route('venda.destroy', $item->id) }}" method="post">
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
