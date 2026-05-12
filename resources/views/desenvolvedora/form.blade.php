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

    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
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
        <div class="row mt-3">
            <div class="col">
                <label for="site_oficial" class="form-label">Site Oficial</label>
                <input type="text" class="form-control" name="site_oficial" value="{{ old('site_oficial', $dado->site_oficial ?? '') }}">
            </div>
            <div class="col">
                <label for="numero_funcionarios" class="form-label">Número de Funcionários</label>
                <input type="text" class="form-control" name="numero_funcionarios" value="{{ old('numero_funcionarios', $dado->numero_funcionarios ?? '') }}">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label class="form-label" for="imagem">Imagem/Logo da Desenvolvedora</label>
                @php
                    $nome_imagem = !empty($dado->imagem) ? $dado->imagem : 'sem_imagem.png';
                @endphp
                <br>
                <img src="{{ asset('storage/' . $nome_imagem) }}" class="rounded-circle mb-2" width="150px" height="150px" alt="imagem">
                <input type="file" name="imagem" class="form-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ url('desenvolvedora') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>

@stop
