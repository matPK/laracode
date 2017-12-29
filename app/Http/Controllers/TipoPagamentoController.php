<?php

namespace App\Http\Controllers;

use App\TipoPagamento;
use Illuminate\Http\Request;

class TipoPagamentoController extends Controller
{

    private $tipoPagamento;


    public function __construct(TipoPagamento $tipoPagamento) {
        $this->tipoPagamento = $tipoPagamento;
        $this->middleware('auth');
    }

    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */



    public function index()
    {
        $tip = TipoPagamento::paginate(5);

        return view('tipo', compact('tip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tip = TipoPagamento::all();

        return view('tipo.create', compact('tip'));
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
        $tip = $request->all();

        $this->tipoPagamento->create($request->all());

        //vai criar o objeto e redirecionar depois
        return redirect()->route('tipo.index');

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
        $tip = TipoPagamento::find($id);


        return view('tipo.edit', compact( 'tip'));
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
            'Pagamento_Descricao' => 'required',
            'Pagamento_Status' => 'required'
        ]);

        $tip = TipoPagamento::find($id);

        $tip->Pagamento_Descricao = $request->Pagamento_Descricao;
        $tip->Pagamento_Status = $request->Pagamento_Status;

        $tip->save();

        return redirect()->route('tipo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tip = TipoPagamento::find($id);
        $tip->delete();


        return redirect()->route('tipo.index');
    }
}
