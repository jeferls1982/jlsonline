<?php

namespace App\models\cardapio;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programa';
    protected $timestamps = false;
    protected $fillable = ['data', 'user_id','refeicao_id', 'cardapio_id'];
}
