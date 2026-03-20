@extends('main')
@section('titulo', 'Formulário Jogo')
@section('conteudo')

    <h4>Formulário Jogo</h4>

    @php
        if (!empty($dado->id)) {
            $action = route('jogo.update', $dado->id);
        } else {
            $action = route('jogo.store');
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
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" name="titulo" value="{{ old('titulo', $dado->titulo ?? '') }}">
            </div>
            <div class="col">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" name="preco"
                    value="{{ old('preco', $dado->preco ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="data_lancamento">Data de Lançamento</label>
                <input type="date" class="form-control" name="data_lancamento" value="{{ old('data_lancamento', $dado->data_lancamento ?? '') }}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="form-label" for="plataforma_id">ID da Plataforma</label>
                <input type="text" class="form-control" name="plataforma_id" value="{{ old('plataforma_id', $dado->plataforma_id ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="desenvolvedora_id">ID da Desenvolvedora</label>
                <input type="text" class="form-control" name="desenvolvedora_id" value="{{ old('desenvolvedora_id', $dado->desenvolvedora_id ?? '') }}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ url('jogo') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>

@stop
