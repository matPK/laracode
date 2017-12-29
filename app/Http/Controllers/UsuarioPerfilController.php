<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use App\Usuario;

class UsuarioPerfilController extends Controller
{

    private $perfils;
    private $usuarios;

    public function __construct(Perfil $perfils,Usuario $usuarios) {

        $this->perfils = $perfils;
        $this->usuarios = $usuarios;
        $this->middleware('auth');
    }

    public function index()
    {
        $perf = Perfil::paginate(5);

        $usu = Usuario::all();

        return view('perfil', compact('perf', 'usu'));

    }


    public function create()
    {
        $perf = Perfil::all();

        return view('perfil.create', compact('perf'));
    }


    public function store(Request $request)
    {
        //pega os todos os dados do formulario
        $perf = $request->all();

        $this->perfils->create($request->all());

        //vai criar o objeto e redirecionar depois
        return redirect()->route('perfil.index');
        //return view('usuario', compact('usu'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //passar o model com id
        $perf = Perfil::find($id);


        return view('perfil.edit', compact( 'perf'));
    }


    public function update(Request $request, $id)
    {
        //pega os todos os dados do formulario
        $request->validate([
            'Perfil_Descricao' => 'required',
            'Perfil_Status' => 'required'
        ]);

        $perf = Perfil::find($id);

        $perf->Perfil_Descricao = $request->Perfil_Descricao;
        $perf->Perfil_Status = $request->Perfil_Status;



        $perf->save();

        return redirect()->route('perfil.index');
    }


    public function destroy($id)
    {
        $perf = Perfil::find($id);
        $perf->delete();


        return redirect()->route('perfil.index');
    }
}
