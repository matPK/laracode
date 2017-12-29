<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'created_at', 'updated_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
