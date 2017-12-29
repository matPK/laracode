<?php

namespace App\Http\Controllers;


use App\Operacao;
use App\Usuario;
use Illuminate\Http\Request;
use App\Perfil;
use App\User;
use App\UserOperacao;


class UsuarioController extends Controller
{

    private $perfil;
    private $user;
    private $operacao;
    private $userOperacao;

    public function __construct(Perfil $perfil, User $user, Operacao $operacao, UserOperacao $userOperacao) {

        $this->perfil = $perfil;
        $this->user = $user;
        $this->operacao = $operacao;
        $this->userOperacao = $userOperacao;
        $this->middleware('auth');
    }


    public function index()
    {
        $usu = User::paginate(5);

        $perf = Perfil::all();

        $oper = Operacao::all();

        $userOperacao = UserOperacao::all();


        //view('usuario', compact('usu', 'perf'));

        return view('usuario', compact('usu', 'perf', 'oper', 'userOperacao'));
    }



    public function create()
    {
        $perf = Perfil::all();

        $oper = Operacao::all();

        $usu = Usuario::all();

        $userrot = UserOperacao::all();


        return view('usuario.create', compact('perf', 'oper', 'usu', 'userrot'));
    }


    public function store(Request $request)
    {
            //$usu = $request->all();
            //$this->user->create($usu);
        $usu['name'] = $request->input('name');
        $usu['email'] = $request->input('email');
        $usu['password'] = \Hash::make($request->input('password'));
        $usu['status'] = $request->input('status');
        $usu['perfil_id'] = $request->input('perfil_id');

/*
        $usu->operacoes()->sync([


        ]);
*/
        dd($usu->operacoes());



        //$this->user->create($usu);
        $this->user->create($usu);

        return redirect()->route('usuario.index');
    }

    public function manyToManyInverse()
    {

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //passar o model com id
        $usu = User::find($id);

        $perf = Perfil::all();

        $oper = Operacao::all();

        $usop = UserOperacao::all();


        return view('usuario.edit', compact('usu', 'perf', 'oper', 'usop'));
    }


    public function update(Request  $request, $id)
    {
        //pega os todos os dados do formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'status' => 'required',
            'password' => 'required',
            'perfil_id' => 'required|numeric'
        ]);

        $usu = User::find($id);

        $usu->name = $request->name;
        $usu->email = $request->email;
        $usu->status = $request->status;
        $usu->password = \Hash::make($request->password);
        $usu->perfil_id = $request->perfil_id;

        //'password' => bcrypt($data['password']),


        $usu->save();

        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usu = User::find($id);
        $usu->delete();


        return redirect()->route('usuario.index');
    }
}
