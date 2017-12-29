<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operacao;
use App\Rotas;

class OperacaoController extends Controller
{


    private $operacao;
    private $rotas;

    public function __construct(Operacao $operacao, Rotas $rotas) {
        $this->operacao = $operacao;
        $this->rotas = $rotas;
        $this->middleware('auth');
    }


    /*
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $oper = Operacao::paginate(5);
        $rot = Rotas::all();

        return view('operacao', compact('oper', 'rot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oper = Operacao::all();


        return view('operacao.create', compact('oper'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //pega os todos os dados do formulario
        $oper = $request->all();

        $this->operacao->create($request->all());

        //vai criar o objeto e redirecionar depois
        return redirect()->route('operacao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //passar o model com id
        $oper = Operacao::find($id);
        $rot = Rotas::all();

        return view('operacao.edit', compact('oper', 'rot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //pega os todos os dados do formulario
        $request->validate([
            'Operacao_Descricao' => 'required',
            'Operacao_Status' => 'required'

        ]);

        $oper = Operacao::find($id);

        $oper->Operacao_Descricao = $request->Operacao_Descricao;
        $oper->Operacao_Status = $request->Operacao_Status;

        $oper->save();

        return redirect()->route('operacao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oper = Operacao::find($id);
        $oper->delete();

        return redirect()->route('operacao.index');
    }
}
