<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plataforma;

class PlataformaController extends Controller
{

    function index()
    {
        $dados = Plataforma::all(); //select * from plataforma

        // dd($dados);
        //var_dump($dados);
        //  exit;

        return view('plataforma.list', ['dados' => $dados]);
    }

    function create()
    {
        return view('plataforma.form');
    }

    function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'fabricante' => 'required',
        ], [
            'nome' => "O :attribute é obrigatório",
            'fabricante' => "O :attribute é obrigatório",
        ]);

        Plataforma::create($request->all());

        return redirect('plataforma');
    }

    function edit($id)
    {
        $dado = Plataforma::find($id);
        return view('plataforma.form', ['dado' => $dado]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'fabricante' => 'required',
        ], [
            'nome' => "O :attribute é obrigatório",
            'fabricante' => "O :attribute é obrigatório",
        ]);

        Plataforma::find($id)->update($request->all());

        return redirect('plataforma');
    }

    function destroy($id)
    {
        Plataforma::destroy($id);
        return redirect('plataforma');
    }

    function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = Plataforma::where(
                $request->tipo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $dados = Plataforma::all();
        }

        return view('plataforma.list', ['dados' => $dados]);
    }
}