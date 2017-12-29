<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Cliente extends Model
{

    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id', 'cliente_nome', 'cliente_status', 'operacao_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    */

    protected $hidden = [
        'password', 'remember_token',
    ];
}