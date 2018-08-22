<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Categoria extends Model
{

    protected $fillable = 
        array('nome');

    public function produtos()
    {
        return $this->hasMany('\App\Produto');
    }
}
