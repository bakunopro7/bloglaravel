<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	//guardar datos de formna masiva
	protected $fillable = [
		'user_id','category_id','name','slug','excerpt','body','status','file'
	];

	//relacion de usarios
	public function user(){
		return $this->belongsTo(User::tag);
	}
	//relacion de categoria con post
	public function category(){
		return $this->belongsTo(Category::tag);
	}

    //relacion de tag con post
    public function  tags(){
    	return $this->belongsToMany(Tag::class);//Se relaciona los registros "belongsToMany"
    }
}
