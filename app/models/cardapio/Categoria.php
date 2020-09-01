<?php

namespace App\models\cardapio;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Categoria extends Model
{
    protected $table ='categoria';
    public $timestamps = false;
    protected $fillable = ['nome','user_id'];
    
    
    public function user(){
        return $this->belongsTo('User');
    }
    
    
}
