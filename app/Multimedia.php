<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
	
    use Notifiable;
    public $timestamps = false;
	 
	protected $fillable=[
		'id','avatar','name'
	];
}
