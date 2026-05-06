<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class JogosMaisVendidos
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        /*
        SELECT j.titulo, COUNT(1) AS qtd_vendas FROM vendas v
            INNER JOIN jogos j ON j.id = v.jogo_id
            GROUP BY j.titulo
        */

        $vendasPorJogo = DB::table('vendas')
            ->join('jogos', 'jogos.id', '=', 'vendas.jogo_id')
            ->select('jogos.titulo', DB::raw('count(1) as qtd_vendas'))
            ->groupBy('jogos.titulo')
            ->orderBy('qtd_vendas', 'desc')
            ->get();

        $qtdVendas = [];
        $nomeJogos = [];

        foreach ($vendasPorJogo as $item) {
            $qtdVendas[] = $item->qtd_vendas;
            $nomeJogos[] = $item->titulo;
        }

        return $this->chart->pieChart()
            ->setTitle('QTD Vendas por Jogo')
            ->setSubtitle('Semestre 2026.1')
            ->addData($qtdVendas)
            ->setLabels($nomeJogos);
    }
}
