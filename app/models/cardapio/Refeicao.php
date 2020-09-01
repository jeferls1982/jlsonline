<?php

namespace App\models\cardapio;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
    protected $table = 'refeicao';
    protected $timestamps = false;
    protected $fillable = ['nome','user_id','horario'];
}
