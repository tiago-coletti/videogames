<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;

class JogoController extends Controller
{

    function index()
    {
        $dados = Jogo::all(); //select * from jogos

        // dd($dados);
        //var_dump($dados);
        //  exit;

        return view('jogo.list', ['dados' => $dados]);
    }

    function create()
    {
        return view('jogo.form');
    }

    function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'preco' => 'required',
            'data_lancamento' => 'required',
            'plataforma_id' => 'required',
            'desenvolvedora_id' => 'required',
        ], [
            'titulo' => "O :attribute é obrigatório",
            'preco' => "O :attribute é obrigatório",
            'data_lancamento' => "O :attribute é obrigatório",
            'plataforma_id' => "O :attribute é obrigatório",
            'desenvolvedora_id' => "O :attribute é obrigatório",
        ]);

        Jogo::create($request->all());

        return redirect('jogo');
    }

    function edit($id)
    {
        $dado = Jogo::find($id);
        return view('jogo.form', ['dado' => $dado]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'preco' => 'required',
            'data_lancamento' => 'required',
            'plataforma_id' => 'required',
            'desenvolvedora_id' => 'required',
        ], [
            'titulo' => "O :attribute é obrigatório",
            'preco' => "O :attribute é obrigatório",
            'data_lancamento' => "O :attribute é obrigatório",
            'plataforma_id' => "O :attribute é obrigatório",
            'desenvolvedora_id' => "O :attribute é obrigatório",
        ]);

        Jogo::find($id)->update($request->all());

        return redirect('jogo');
    }

    function destroy($id)
    {
        Jogo::destroy($id);
        return redirect('jogo');
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
}
