<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Operacao;
use App\UserOperacao;

class UserOperacaoController extends Controller
{

    private $user;
    private $operacao;
    private $userOperacao;


    public function __construct(User $user, Operacao $operacao, UserOperacao $userOperacao) {

        $this->user = $user;
        $this->operacao = $operacao;
        $this->userOperacao = $userOperacao;

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

    }




    public function destroy($id)
    {

    }
}
