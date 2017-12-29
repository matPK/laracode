<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Model
{

    public $timestamps = false;

    protected $primaryKey = 'Usuario_ID';


    protected $fillable = [
        'Usuario_ID',
        'Usuario_Nome',
        'Usuario_Senha',
        'Usuario_Status' ,
        'Perfil_ID',
    ];




    public function perfil()
    {
        return $this->belongsTo('App\Perfil');
    }

    public function operacao()
    {
        return $this->belongsTo('App\Operacao');
    }


    protected $hidden = [
        'password', 'remember_token',
    ];

}




