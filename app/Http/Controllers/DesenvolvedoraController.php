<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desenvolvedora;

class DesenvolvedoraController extends Controller
{

    function index()
    {
        $dados = Desenvolvedora::all();
        return view('desenvolvedora.list', ['dados' => $dados]);
    }

    function create()
    {
        return view('desenvolvedora.form');
    }

    function validateRequest(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'pais' => 'required',
            'ano_fundacao' => 'required',
            'imagem' => 'nullable|image|mimes:png,jpg,jpeg'
        ], [
            'nome' => "O :attribute é obrigatório",
            'pais' => "O :attribute é obrigatório",
            'ano_fundacao' => "O :attribute é obrigatório",
            'imagem.image' => "O :attribute deve ser uma imagem",
            'imagem.mimes' => "O :attribute deve ser das extensões: PNG, JPEG ou JPG",
        ]);
    }

    function store(Request $request)
    {
        $this->validateRequest($request);
        $data = $request->all();
        $imagem = $request->file('imagem');

    if ($imagem) {
        $obj = Desenvolvedora::findOrFail($id);
        if($obj->imagem){
            \Storage::disk('public')->delete($obj->imagem);
        }

    $nome_imagem = date('YmdiHs') . "." . $imagem->getClientOriginalExtension();
    $diretorio = "imagem/desenvolvedora/";
    $imagem->storeAs($diretorio, $nome_imagem, 'public');
    $data['imagem'] = $diretorio . $nome_imagem;
}

        Desenvolvedora::create($data);

        return redirect('desenvolvedora')->with('success', 'Registro cadastrado com sucesso!');
    }

    function edit($id)
    {
        $dado = Desenvolvedora::find($id);
        return view('desenvolvedora.form', ['dado' => $dado]);
    }

    function update(Request $request, $id)
    {
        $this->validateRequest($request);
        $data = $request->all();
        $imagem = $request->file('imagem');

        if ($imagem) {
            $nome_imagem = date('YmdiHs') . "." . $imagem->getClientOriginalExtension();
            $diretorio = "imagem/desenvolvedora/";
            $imagem->storeAs($diretorio, $nome_imagem, 'public');
            $data['imagem'] = $diretorio . $nome_imagem;
        }

        Desenvolvedora::find($id)->update($data);

        return redirect('desenvolvedora')->with('success', 'Registro atualizado com sucesso!');
    }

    function destroy($id)
    {
        Desenvolvedora::destroy($id);
        return redirect('desenvolvedora')->with('success', 'Registro removido com sucesso!');
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
