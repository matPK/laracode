<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPagamento extends Model
{

    public $timestamps = false;

    public $primaryKey = 'Pagamento_ID';

    protected $fillable = [
        'Pagamento_ID',
        'Pagamento_Descricao',
        'Pagamento_Status',
        
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
