<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class CnpjCliente extends Model
{
    //use Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CNPJ', 'Cliente_ID',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
}
