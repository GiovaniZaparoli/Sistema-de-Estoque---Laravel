<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class Produto extends Model
{
    protected $fillable = 
        array('nome', 'descricao', 'quantidade', 'valor', 'tamanho', 'categoria_id');

    public function categoria()
    {
        return $this->belongsTo('\App\Categoria');
    }        
}
