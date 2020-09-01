<?php

namespace App\models\cardapio;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    protected $table = 'cardapio';
    protected $timestamps = false;
    protected $fillable = ['nome','user_id', 'id_combinacao'];
}
