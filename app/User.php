<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'status',
        'perfil_id',
    ];



    public function perfil()
    {
        return $this->belongsTo('App\Perfil');
    }

    public function operacaos()
    {
        return $this->belongsToMany(\App\Operacao::class);
    }

    public function user_operacao()
    {
        return $this->belongsToMany('App\UserOperacao');
    }

    public function cnpj_clientes()
    {
        return $this->belongsTo('App\CnpjCliente');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
