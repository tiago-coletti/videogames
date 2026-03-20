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
                <label for="cliente_id" class="form-label">ID do Cliente</label>
                <input type="text" class="form-control" name="cliente_id" value="{{ old('cliente_id', $dado->cliente_id ?? '') }}">
            </div>
            <div class="col">
                <label for="vendedor_id" class="form-label">ID do Vendedor</label>
                <input type="text" class="form-control" name="vendedor_id"
                    value="{{ old('vendedor_id', $dado->vendedor_id ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="jogo_id">ID do Jogo</label>
                <input type="text" class="form-control" name="jogo_id" value="{{ old('jogo_id', $dado->jogo_id ?? '') }}">
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
