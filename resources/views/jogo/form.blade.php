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

    <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
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
                <input type="text" class="form-control" name="preco" value="{{ old('preco', $dado->preco ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="data_lancamento">Data de Lançamento</label>
                <input type="date" class="form-control" name="data_lancamento" value="{{ old('data_lancamento', $dado->data_lancamento ?? '') }}">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label class="form-label" for="plataforma_id">Plataforma</label>
                <select name="plataforma_id" class="form-select">
                    @foreach ($plataformas as $plataforma)
                        <option value="{{ $plataforma->id }}" {{ (old('plataforma_id', $dado->plataforma_id ?? '') == $plataforma->id) ? 'selected' : '' }}>
                            {{ $plataforma->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label class="form-label" for="desenvolvedora_id">Desenvolvedora</label>
                <select name="desenvolvedora_id" class="form-select">
                    @foreach ($desenvolvedoras as $desenvolvedora)
                        <option value="{{ $desenvolvedora->id }}" {{ (old('desenvolvedora_id', $dado->desenvolvedora_id ?? '') == $desenvolvedora->id) ? 'selected' : '' }}>
                            {{ $desenvolvedora->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label class="form-label" for="imagem">Imagem (Capa do Jogo)</label>
                @php
                    $nome_imagem = !empty($dado->imagem) ? $dado->imagem : 'sem_imagem.png';
                @endphp
                <br>
                <img src="{{ asset('storage/' . $nome_imagem) }}" class="rounded-circle mb-2" width="200px" height="200px" alt="imagem">
                <input type="file" name="imagem" class="form-control">
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
