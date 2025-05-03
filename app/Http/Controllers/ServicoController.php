<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Http\Requests\ServicoRequest;

class ServicoController extends Controller
{
    //
    public function index()
    {

        $servicos = Servico::paginate(10);
        return view('servicos.index',compact('servicos'));
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(ServicoRequest $request)
    {
        $dados = $request->except('_token');

        $servico = Servico::create($dados);

        return redirect()->route('servicos.index');
    }

    public function edit( int $id){

        $servico = Servico::findOrFail($id);

        return view('servicos.edit',compact('servico'));

    }

    public function update(int $id, ServicoRequest $request)
    {

        $dado = $request->except(['_token','_method']);
        $servico = Servico::findOrFail($id)->update($dado);

        return redirect()->route('servicos.index');

    }
}
