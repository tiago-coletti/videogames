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

    <table class="table table-hover">
        <thead>
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
                    <td>{{ $item->preco }}</td>
                    <td>{{ $item->data_lancamento }}</td>
                    <td>{{ $item->plataforma_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
