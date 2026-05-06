@extends('main')
@section('titulo', 'Formulário Cartão Fidelidade')
@section('conteudo')

    <h4>Formulário Cartão Fidelidade</h4>

    @php
        if (!empty($dado->id)) {
            $action = route('cartao.update', $dado->id);
        } else {
            $action = route('cartao.store');
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
                <label for="codigo_cartao" class="form-label">Código do Cartão</label>
                <input type="text" class="form-control" name="codigo_cartao" value="{{ old('codigo_cartao', $dado->codigo_cartao ?? '') }}">
            </div>
            <div class="col">
                <label for="pontos" class="form-label">Pontos</label>
                <input type="number" class="form-control" name="pontos" value="{{ old('pontos', $dado->pontos ?? 0) }}">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label class="form-label" for="data_validade">Data de Validade</label>
                <input type="date" class="form-control" name="data_validade" value="{{ old('data_validade', $dado->data_validade ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="cliente_id">Cliente</label>
                <select name="cliente_id" class="form-select">
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ (old('cliente_id', $dado->cliente_id ?? '') == $cliente->id) ? 'selected' : '' }}>
                            {{ $cliente->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ url('cartao') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>

@stop
