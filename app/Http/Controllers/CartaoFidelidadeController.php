<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartaoFidelidade;
use App\Models\Cliente;

class CartaoFidelidadeController extends Controller
{
    function index()
    {
        $dados = CartaoFidelidade::all();

        return view('cartao_fidelidade.list', ['dados' => $dados]);
    }

    function create()
    {
        $clientes = Cliente::orderBy('nome')->get();
        return view('cartao_fidelidade.form', ['clientes' => $clientes]);
    }

    function store(Request $request)
    {
        $request->validate([
            'codigo_cartao' => 'required|unique:cartao_fidelidades',
            'pontos' => 'required',
            'data_validade' => 'required',
            'cliente_id' => 'required|unique:cartao_fidelidades',
        ], [
            'codigo_cartao.required' => "O :attribute é obrigatório",
            'codigo_cartao.unique' => "Este código já está em uso",
            'pontos.required' => "O :attribute é obrigatório",
            'data_validade.required' => "O :attribute é obrigatório",
            'cliente_id.required' => "O :attribute é obrigatório",
            'cliente_id.unique' => "Este cliente já possui um cartão fidelidade",
        ]);

        CartaoFidelidade::create($request->all());

        return redirect('cartao');
    }

    function edit($id)
    {
        $dado = CartaoFidelidade::find($id);
        $clientes = Cliente::orderBy('nome')->get();

        return view('cartao_fidelidade.form', [
            'dado' => $dado,
            'clientes' => $clientes
        ]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'codigo_cartao' => 'required|unique:cartao_fidelidades,codigo_cartao,' . $id,
            'pontos' => 'required',
            'data_validade' => 'required',
            'cliente_id' => 'required|unique:cartao_fidelidades,cliente_id,' . $id,
        ], [
            'codigo_cartao.required' => "O :attribute é obrigatório",
            'pontos.required' => "O :attribute é obrigatório",
            'data_validade.required' => "O :attribute é obrigatório",
            'cliente_id.required' => "O :attribute é obrigatório",
        ]);

        CartaoFidelidade::find($id)->update($request->all());

        return redirect('cartao');
    }

    function destroy($id)
    {
        CartaoFidelidade::destroy($id);
        return redirect('cartao');
    }

    function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = CartaoFidelidade::where(
                $request->tipo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $dados = CartaoFidelidade::all();
        }

        return view('cartao_fidelidade.list', ['dados' => $dados]);
    }
}
