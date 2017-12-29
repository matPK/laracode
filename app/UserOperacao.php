<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Operacao;
use App\User;

class UserOperacao extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_operacao',
    ];

    public function perfil()
    {
        return $this->belongsTo('App\Perfil');
    }


    public function cnpj_clientes()
    {
        return $this->belongsTo('App\CnpjCliente');
    }


    protected $hidden = [
        'password', 'remember_token',
    ];
}
