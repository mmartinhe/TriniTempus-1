<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use Notifiable;
    public $timestamps = false;
    
    
    protected $fillable = [
        'emisor', 'receptor', 'contenido', 'tipo',  
    ];
}
