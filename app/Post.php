<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


	 
    protected $fillable = ['user_id','category_id','title','slug','body','image'];
	
    public function category(){

    	return $this->belongsTo('App\Category');


    }

        public function user(){

    	return $this->belongsTo('App\User');


    }
}
