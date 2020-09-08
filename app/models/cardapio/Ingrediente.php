<?php

namespace App\models\cardapio;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{    
    public $timestamps = false;
    protected $fillable = ['nome','user_id','categoria_id'];
    
    
    
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
