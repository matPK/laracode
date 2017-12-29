<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Operacao extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'Operacao_ID';

    protected $fillable = [
        'Operacao_ID',
        'Operacao_Descricao',
        'Operacao_Status',
    ];



    public function perfil()
    {
        return $this->belongsTo('App\Perfil');
    }

    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }

    public function user_operacao()
    {
        return $this->belongsToMany(UserOperacao::class, 'user_operacaos', 'id', 'id_operacao');
    }

    public function cnpj_clientes()
    {
        return $this->belongsTo('App\CnpjCliente');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    
}
