<?php

namespace App\models\cardapio;

use Illuminate\Database\Eloquent\Model;

class Combinacao extends Model
{
    protected $table = 'combinacao';
    protected $timestamps = false;
    protected $fillable = ['user_id','ingredientes'];
}
