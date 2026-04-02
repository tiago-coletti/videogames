@extends('main')
@section('titulo', 'Formulário Venda')
@section('conteudo')

    <h4>Formulário Venda</h4>

    @php
        if (!empty($dado->id)) {
            $action = route('venda.update', $dado->id);
        } else {
            $action = route('venda.store');
        }
    @endphp

    <form action="{{ $action }}" method="POST">
        @csrf
        @if (!empty($dado->id))
            @method('PUT')
        @endif
        <div class="row">
            <input type="hidden" name="id" value="{{ $dado->id ?? '' }}">
            <div class="col">
                <label for="cliente_id" class="form-label">Cliente</label>
                <select name="cliente_id" class="form-select">
                    <option value="">Selecione</option>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ (old('cliente_id', $dado->cliente_id ?? '') == $cliente->id) ? 'selected' : '' }}>
                            {{ $cliente->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="vendedor_id" class="form-label">Vendedor</label>
                <select name="vendedor_id" class="form-select">
                    <option value="">Selecione</option>
                    @foreach ($vendedores as $vendedor)
                        <option value="{{ $vendedor->id }}" {{ (old('vendedor_id', $dado->vendedor_id ?? '') == $vendedor->id) ? 'selected' : '' }}>
                            {{ $vendedor->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label class="form-label" for="jogo_id">Jogo</label>
                <select name="jogo_id" class="form-select">
                    <option value="">Selecione</option>
                    @foreach ($jogos as $jogo)
                        <option value="{{ $jogo->id }}" {{ (old('jogo_id', $dado->jogo_id ?? '') == $jogo->id) ? 'selected' : '' }}>
                            {{ $jogo->titulo }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="form-label" for="data_venda">Data da Venda</label>
                <input type="datetime-local" class="form-control" name="data_venda" value="{{ old('data_venda', $dado->data_venda ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="valor_total">Valor Total</label>
                <input type="text" class="form-control" name="valor_total" value="{{ old('valor_total', $dado->valor_total ?? '') }}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ url('venda') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>

@stop
