<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
     protected $table = 'sub_categorias';


    protected $fillable = [
        'id_categoria', 'nombre',   
    ];

    public $timestamps = false;
}
