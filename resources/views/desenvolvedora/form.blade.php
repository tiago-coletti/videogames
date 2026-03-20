@extends('main')
@section('titulo', 'Formulário Desenvolvedora')
@section('conteudo')

    <h4>Formulário Desenvolvedora</h4>

    @php
        if (!empty($dado->id)) {
            $action = route('desenvolvedora.update', $dado->id);
        } else {
            $action = route('desenvolvedora.store');
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
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="{{ old('nome', $dado->nome ?? '') }}">
            </div>
            <div class="col">
                <label for="pais" class="form-label">País</label>
                <input type="text" class="form-control" name="pais"
                    value="{{ old('pais', $dado->pais ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="ano_fundacao">Ano de Fundação</label>
                <input type="text" class="form-control" name="ano_fundacao" value="{{ old('ano_fundacao', $dado->ano_fundacao ?? '') }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ url('desenvolvedora') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>

@stop