<?php

namespace App\models\cardapio;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingrediente';
    protected $timestamps = false;
    protected $fillable = ['nome','user_id','categoria_id'];
}
