<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Loja de Videogames</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jogo.index') }}">Jogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('desenvolvedora.index') }}">Desenvolvedoras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('plataforma.index') }}">Plataformas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cliente.index') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vendedor.index') }}">Vendedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('venda.index') }}">Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cartao.index') }}">Cartões Fidelidade</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('conteudo')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
