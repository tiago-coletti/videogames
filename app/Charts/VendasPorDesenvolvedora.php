<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class VendasPorDesenvolvedora
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $vendasPorDev = DB::table('vendas')
            ->join('jogos', 'jogos.id', '=', 'vendas.jogo_id')
            ->join('desenvolvedoras', 'desenvolvedoras.id', '=', 'jogos.desenvolvedora_id')
            ->select('desenvolvedoras.nome', DB::raw('count(1) as total'))
            ->groupBy('desenvolvedoras.nome')
            ->get();

        $qtdVendas = [];
        $nomesDevs = [];

        foreach ($vendasPorDev as $item) {
            $qtdVendas[] = $item->total;
            $nomesDevs[] = $item->nome;
        }

        return $this->chart->donutChart()
            ->setTitle('Participação de Vendas por Desenvolvedora')
            ->setSubtitle('Semestre 2026.1')
            ->addData($qtdVendas)
            ->setLabels($nomesDevs);
    }
}
