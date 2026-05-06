<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h3>{{ $titulo }}</h3>
    <img src="{{ storage_path('app/public/sem_imagem.png') }}" style="width: 200px; height: 200px">

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
                        @php
                            $dataMatricula = date('d/m/Y', strtotime($aluno->data_venda));
                        @endphp
                        <tr>
                            <th scope="row">{{ $aluno->id }}</th>
                            <td>{{ $aluno->cliente->nome ?? ' - ' }}</td>
                            <td>{{ $aluno->vendedor->nome ?? ' - ' }}</td>
                            <td>{{ $dataMatricula ?? '- ' }}</td>
                            <td>{{ $aluno->valor_total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endforeach


</body>

</html>
