<?php

namespace App;

use Illuminate\ Database\ Eloquent\ Model;

class Servicio extends Model {
    protected $table = 'servicios';


    protected $fillable = [
        'id_usuario', 'titulo', 'ciudad', 'categoria', 'sub_categoria', 'fecha', 'hora',
    ];

    public $timestamps = false;
}