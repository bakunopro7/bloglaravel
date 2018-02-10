<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
		'name','slug','body'
	]

    //relacion de tag con post
    public function  posts(){
    	return $this->belongsToMany(Post::class);//Se relaciona los registros "belongsToMany"
    }
}
