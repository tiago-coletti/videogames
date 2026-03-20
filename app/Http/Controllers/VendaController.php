<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{

    function index()
    {
        $dados = Venda::all(); //select * from vendas

        // dd($dados);
        //var_dump($dados);
        //  exit;

        return view('venda.list', ['dados' => $dados]);
    }

    function create()
    {
        return view('venda.form');
    }

    function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required',
            'vendedor_id' => 'required',
            'jogo_id' => 'required',
            'data_venda' => 'required',
            'valor_total' => 'required',
        ], [
            'cliente_id' => "O :attribute é obrigatório",
            'vendedor_id' => "O :attribute é obrigatório",
            'jogo_id' => "O :attribute é obrigatório",
            'data_venda' => "O :attribute é obrigatório",
            'valor_total' => "O :attribute é obrigatório",
        ]);

        Venda::create($request->all());

        return redirect('venda');
    }

    function edit($id)
    {
        $dado = Venda::find($id);
        return view('venda.form', ['dado' => $dado]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'cliente_id' => 'required',
            'vendedor_id' => 'required',
            'jogo_id' => 'required',
            'data_venda' => 'required',
            'valor_total' => 'required',
        ], [
            'cliente_id' => "O :attribute é obrigatório",
            'vendedor_id' => "O :attribute é obrigatório",
            'jogo_id' => "O :attribute é obrigatório",
            'data_venda' => "O :attribute é obrigatório",
            'valor_total' => "O :attribute é obrigatório",
        ]);

        Venda::find($id)->update($request->all());

        return redirect('venda');
    }

    function destroy($id)
    {
        Venda::destroy($id);
        return redirect('venda');
    }

    function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = Venda::where(
                $request->tipo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $dados = Venda::all();
        }

        return view('venda.list', ['dados' => $dados]);
    }
}
