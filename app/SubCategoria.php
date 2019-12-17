<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
     protected $table = 'su_categorias';


    protected $fillable = [
        'nombre',   
    ];

    public $timestamps = false;
}
