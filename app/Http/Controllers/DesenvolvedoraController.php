<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desenvolvedora;

class DesenvolvedoraController extends Controller
{

    function index()
    {
        $dados = Desenvolvedora::all(); //select * from desenvolvedoras

        // dd($dados);
        //var_dump($dados);
        //  exit;

        return view('desenvolvedora.list', ['dados' => $dados]);
    }

    function create()
    {
        return view('desenvolvedora.form');
    }

    function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'pais' => 'required',
            'ano_fundacao' => 'required',
        ], [
            'nome' => "O :attribute é obrigatório",
            'pais' => "O :attribute é obrigatório",
            'ano_fundacao' => "O :attribute é obrigatório",
        ]);

        Desenvolvedora::create($request->all());

        return redirect('desenvolvedora');
    }

    function edit($id)
    {
        $dado = Desenvolvedora::find($id);
        return view('desenvolvedora.form', ['dado' => $dado]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'pais' => 'required',
            'ano_fundacao' => 'required',
        ], [
            'nome' => "O :attribute é obrigatório",
            'pais' => "O :attribute é obrigatório",
            'ano_fundacao' => "O :attribute é obrigatório",
        ]);

        Desenvolvedora::find($id)->update($request->all());

        return redirect('desenvolvedora');
    }

    function destroy($id)
    {
        Desenvolvedora::destroy($id);
        return redirect('desenvolvedora');
    }

    function search(Request $request)
    {
        if (!empty($request->valor)) {
            $dados = Desenvolvedora::where(
                $request->tipo,
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $dados = Desenvolvedora::all();
        }

        return view('desenvolvedora.list', ['dados' => $dados]);
    }
}
