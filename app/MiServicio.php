<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MiServicio extends Model
{
   protected $table = 'mis_servicios';


    protected $fillable = [
        'id_usuario',  'ciudad', 'categoria', 
    ];

    public $timestamps = false;
}
