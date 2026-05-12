@extends('main')
@section('titulo', 'Relatórios de Vendas')
@section('conteudo')

<div class="container px-4 mx-auto py-10 flex flex-col gap-12">

    <div class="p-6 bg-white rounded shadow mb-8">
        <h3 class="text-lg font-bold mb-4">Vendas por Jogo</h3>
        {!! $chart1->container() !!}
    </div>

    <div class="p-6 bg-white rounded shadow">
        <h3 class="text-lg font-bold mb-4">Vendas por Desenvolvedora</h3>
        {!! $chart2->container() !!}
    </div>

</div>

<script src="{{ $chart1->cdn() }}"></script>

{!! $chart1->script() !!}
{!! $chart2->script() !!}

@stop
