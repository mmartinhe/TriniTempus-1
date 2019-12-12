<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Notifiable;

class Mensaje extends Model
{
    
    public $timestamps = false;
    
    
    protected $fillable = [
        'emisor', 'receptor', 'contenido', 'tipo',  
    ];
}
