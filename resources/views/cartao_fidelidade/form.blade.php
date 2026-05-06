@extends('main')
@section('titulo', 'Formulário Cliente')
@section('conteudo')

    <h4>Formulário Cliente</h4>

    @php
        if (!empty($dado->id)) {
            $action = route('cliente.update', $dado->id);
        } else {
            $action = route('cliente.store');
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
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"
                    value="{{ old('email', $dado->email ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="password">Senha</label>
                <input type="password" class="form-control" name="password" value="{{ old('password', $dado->password ?? '') }}">
            </div>
            <div class="col">
                <label class="form-label" for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="{{ old('telefone', $dado->telefone ?? '') }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ url('cliente') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </form>

@stop
