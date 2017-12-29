<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Rotas extends Model
{

    public $timestamps = false;

    protected $primaryKey = 'Rota_ID';

    protected $fillable = [
        'Rota_ID',
        'Rota_Nome',
        'Rota_Descricao',
        'Rota_Status',
        'Rota_Diaria',
        'Rota_Extra',
        'Operacao_ID',
        'Pagamento_ID',
    ];


}



