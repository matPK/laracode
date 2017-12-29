<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Perfil extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'Perfil_ID';

    protected $fillable = [
        'Perfil_ID',
        'Perfil_Descricao',
        'Perfil_Status',
    ];

    public function perfil()
    {
        return $this->belongsTo('App\Perfil');
    }

    public function operacao()
    {
        return $this->belongsTo('App\Operacao');
    }

    public function cnpj_clientes()
    {
        return $this->belongsTo('App\CnpjCliente');
    }


    protected $hidden = [
        'password', 'remember_token',
    ];

}
