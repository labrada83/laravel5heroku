<?php

namespace FlyerProject;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{	
	protected $table = "flyers_photos";
	protected $fillable = ['photo'];

    public function flyer(){
    	return $this->belongsTo('App\Flyer');
    }
}
