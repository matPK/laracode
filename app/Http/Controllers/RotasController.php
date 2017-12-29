<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rotas;
use App\Operacao;
use App\TipoPagamento;


/**
 * @property  rotas
 */
class RotasController extends Controller
{

    private $rotas;
    private $operacao;
    private $tipoPagamento;

    public function __construct(Rotas $rotas, Operacao $operacao, TipoPagamento $tipoPagamento) {
        $this->rotas = $rotas;
        $this->operacao = $operacao;
        $this->tipoPagamento = $tipoPagamento;
        $this->middleware('auth');
    }

    public function index()
    {
        $rot = Rotas::paginate(5);
        $oper = Operacao::all();
        $tip = TipoPagamento::all();

        //return view('usuario', $data);

        return view('rota', compact('rot', 'oper', 'tip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rot = Rotas::all();
        $oper = Operacao::all();
        $tip = TipoPagamento::all();


        return view('rota.create' , compact('rot', 'oper', 'tip'));
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
        $rot = $request->all();

        $this->rotas->create($request->all());

        //vai criar o objeto e redirecionar depois
        return redirect()->route('rota.index');
        //return view('usuario', compact('usu'));
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
        $rot = Rotas::find($id);
        $oper = Operacao::all();
        $tip = tipoPagamento::all();

        return view('rota.edit', compact('rot', 'oper', 'tip'));
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
            'Rota_Nome' => 'required',
            'Rota_Descricao' => 'required',
            'Rota_Status' => 'required',
            'Rota_Diaria' => 'required',
            'Rota_Extra' => 'required',
            'Operacao_ID' => 'required',
            'Pagamento_ID' => 'required',
        ]);

        $rot = Rotas::find($id);


        $rot->Rota_Nome = $request->Rota_Nome;
        $rot->Rota_Descricao = $request->Rota_Descricao;
        $rot->Rota_Status = $request->Rota_Status;
        $rot->Rota_Diaria = $request->Rota_Diaria;
        $rot->Rota_Extra = $request->Rota_Extra;
        $rot->Operacao_ID = $request->Operacao_ID;
        $rot->Pagamento_ID = $request->Pagamento_ID;


        $rot->save();

        return redirect()->route('rota.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rot = Rotas::find($id);
        $rot->delete();

        return redirect()->route('rota.index');
    }
}
