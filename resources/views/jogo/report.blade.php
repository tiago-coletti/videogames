<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Jogos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    <h3 class="mb-4">{{ $titulo }}</h3>

    <table class="table table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Preço</th>
                <th scope="col">Data Lançamento</th>
                <th scope="col">Plataforma (ID)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jogos as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->titulo }}</td>
                    <td>R$ {{ number_format($item->preco, 2, ',', '.') }}</td>

                    <td>
                        {{ \Carbon\Carbon::parse($item->data_lancamento)->format('d/m/Y') }}
                    </td>

                    <td>{{ $item->plataforma_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
