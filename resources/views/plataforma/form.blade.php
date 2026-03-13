@extends('main')
@section('titulo', 'Formulário Plataforma')
@section('conteudo')

    <h4>Formulário Plataforma</h4>

    @php
        if (!empty($dado->id)) {
            $action = route('plataforma.update', $dado->id);
        } else {
            $action = route('plataforma.store');
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
                <label for="fabricante" class="form-label">Fabricante</label>
                <input type="text" class="form-control" name="fabricante"
                    value="{{ old('fabricante', $dado->fabricante ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="ano_lancamento">Ano de Lançamento</label>
                <input type="text" class="form-control" name="ano_lancamento" value="{{ old('ano_lancamento', $dado->ano_lancamento ?? '') }}">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ url('plataforma') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>

@stop