<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;
use App\Models\Plataforma;
use App\Models\Desenvolvedora;
use App\Charts\JogosMaisVendidos;
use App\Charts\VendasPorDesenvolvedora;
use Barryvdh\DomPDF\Facade\Pdf;

class JogoController extends Controller
{
    function index()
    {
        $dados = Jogo::all();
        return view('jogo.list', ['dados' => $dados]);
    }

    function create()
    {
        $plataformas = Plataforma::orderBy('nome')->get();
        $desenvolvedoras = Desenvolvedora::orderBy('nome')->get();

        return view('jogo.form', compact('plataformas', 'desenvolvedoras'));
    }

    function validateRequest(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'preco' => 'required',
            'data_lancamento' => 'required',
            'plataforma_id' => 'required',
            'desenvolvedora_id' => 'required',
            'imagem' => 'nullable|image|mimes:png,jpg,jpeg'
        ], [
            'titulo.required' => "O :attribute é obrigatório",
            'preco.required' => "O :attribute é obrigatório",
            'data_lancamento.required' => "O :attribute é obrigatório",
            'plataforma_id.required' => "O :attribute é obrigatório",
            'desenvolvedora_id.required' => "O :attribute é obrigatório",
            'imagem.image' => "O :attribute é deve ser enviado",
            'imagem.mimes' => "O :attribute é deve ser das extensões:PNG, JPEG e JPG",
        ]);
    }

    function store(Request $request)
    {
        $this->validateRequest($request);
        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_imagem = date('YmdiHs') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/jogo/";
            $imagem->storeAs($diretorio, $nome_imagem, 'public');

            $data['imagem'] = $diretorio . $nome_imagem;
        }

        Jogo::create($data);

        return redirect('jogo')->with('success', 'Registro cadastrado com sucesso!');
    }

    function edit($id)
    {
        $dado = Jogo::find($id);
        $plataformas = Plataforma::orderBy('nome')->get();
        $desenvolvedoras = Desenvolvedora::orderBy('nome')->get();

        return view('jogo.form', compact('dado', 'plataformas', 'desenvolvedoras'));
    }

    function update(Request $request, $id)
    {
        $this->validateRequest($request);
        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_imagem = date('YmdiHs') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/jogo/";
            $imagem->storeAs($diretorio, $nome_imagem, 'public');

            $data['imagem'] = $diretorio . $nome_imagem;
        }

        Jogo::find($id)->update($data);

        return redirect('jogo')->with('success', 'Registro atualizado com sucesso!');
    }

    function destroy($id)
    {
        Jogo::destroy($id);
        return redirect('jogo')->with('success', 'Registro removido com sucesso!');
    }

    function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = Jogo::where(
                $request->tipo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $dados = Jogo::all();
        }

        return view('jogo.list', ['dados' => $dados]);
    }

public function chart(JogosMaisVendidos $chart1, VendasPorDesenvolvedora $chart2)
{
    return view('jogo.chart', [
        'chart1' => $chart1->build(),
        'chart2' => $chart2->build(),
    ]);
}
    public function report()
    {
        $jogos = Jogo::orderBy('id')->get();

        $data = [
            'titulo' => 'Relatório Listagem de Jogos',
            'jogos' => $jogos,
        ];

        $pdf = Pdf::loadView('jogo.report', $data);

        return $pdf->download('relatorio_listagem_jogos.pdf');
    }

    public function reportVendas()
    {
        $jogos = Jogo::with('vendas.cliente')->orderBy('id')->get();

        $data = [
            'titulo' => 'Relatório Vendas por Jogo',
            'jogos' => $jogos,
        ];

        $pdf = Pdf::loadView('jogo.reportVendas', $data);

        return $pdf->download('relatorio_vendas_por_jogo.pdf');
    }
}
