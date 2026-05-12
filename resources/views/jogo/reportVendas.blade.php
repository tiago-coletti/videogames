<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h3>{{ $titulo }}</h3>

    @foreach ($jogos as $curso)
        <h4>Jogo: {{ $curso->titulo }}</h4>

        @if ($curso->vendas->isEmpty())
            <p>Nenhuma venda registrada para este jogo.</p>
        @else
            <p>Total de Vendas deste jogo: {{ $curso->vendas->count() }}</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Vendedor</th>
                        <th scope="col">Data Venda</th>
                        <th scope="col">Valor Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($curso->vendas as $aluno)
                        <tr>
                            <th scope="row">{{ $aluno->id }}</th>
                            <td>{{ $aluno->cliente->nome ?? ' - ' }}</td>
                            <td>{{ $aluno->vendedor->nome ?? ' - ' }}</td>
                            <td>{{ \Carbon\Carbon::parse($aluno->data_venda)->format('d/m/Y') }}</td>
                            <td>R$ {{ number_format($aluno->valor_total, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endforeach

</body>
</html>
