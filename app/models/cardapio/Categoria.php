<?php

namespace App\models\cardapio;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Categoria extends Model
{
    
    public $timestamps = false;
    protected $fillable = ['nome','user_id'];
    
    public function ingredientes(){
        return $this->hasMany(Ingrediente::class);
    }
    
    
    
}
