<?php

namespace FlyerProject;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{	
	protected $fillable = [
		'street','city','state', 'country','zip','price', 'description'
	];

	public function scopelocatedAt($query, $zip, $street){
		$street = str_replace('-', ' ', $street);
		return $query->where(compact('zip','street'));
	}

    public function photos(){

    	return $this->hasMany('App\Photo');
    }
}
