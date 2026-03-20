<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{

    function index()
    {
        $dados = Vendedor::all(); //select * from vendedores

        // dd($dados);
        //var_dump($dados);
        //  exit;

        return view('vendedor.list', ['dados' => $dados]);
    }

    function create()
    {
        return view('vendedor.form');
    }

    function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telefone' => 'required',
        ], [
            'nome' => "O :attribute é obrigatório",
            'email' => "O :attribute é obrigatório",
            'password' => "O :attribute é obrigatório",
            'telefone' => "O :attribute é obrigatório",
        ]);

        Vendedor::create($request->all());

        return redirect('vendedor');
    }

    function edit($id)
    {
        $dado = Vendedor::find($id);
        return view('vendedor.form', ['dado' => $dado]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telefone' => 'required',
        ], [
            'nome' => "O :attribute é obrigatório",
            'email' => "O :attribute é obrigatório",
            'password' => "O :attribute é obrigatório",
            'telefone' => "O :attribute é obrigatório",
        ]);

        Vendedor::find($id)->update($request->all());

        return redirect('vendedor');
    }

    function destroy($id)
    {
        Vendedor::destroy($id);
        return redirect('vendedor');
    }

    function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = Vendedor::where(
                $request->tipo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $dados = Vendedor::all();
        }

        return view('vendedor.list', ['dados' => $dados]);
    }
}
