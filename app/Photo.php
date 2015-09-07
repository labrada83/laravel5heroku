<?php

namespace FlyerProject;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{	
	protected $table = "flyers_photos";
	protected $fillable = ['photo'];
	protected $baseDir = 'flyers/photos';

    public function flyer(){
    	return $this->belongsTo('App\Flyer');
    }

    public static function fromForm(UploadedFile $file)
    {
    	$photo = new static;
    	$name = time().$file->getClientOriginalName();

    	$photo->path = $photo->baseDir.'/'.$name;
    	$file->move($photo->baseDir,$name);

    	return $photo;
    }
}
