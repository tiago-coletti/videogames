<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    function index()
    {
        $dados = Cliente::all(); //select * from clientes

        // dd($dados);
        //var_dump($dados);
        //  exit;

        return view('cliente.list', ['dados' => $dados]);
    }

    function create()
    {
        return view('cliente.form');
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

        Cliente::create($request->all());

        return redirect('cliente');
    }

    function edit($id)
    {
        $dado = Cliente::find($id);
        return view('cliente.form', ['dado' => $dado]);
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

        Cliente::find($id)->update($request->all());

        return redirect('cliente');
    }

    function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('cliente');
    }

    function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = Cliente::where(
                $request->tipo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $dados = Cliente::all();
        }

        return view('cliente.list', ['dados' => $dados]);
    }
}
