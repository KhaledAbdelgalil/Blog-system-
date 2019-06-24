<?php

namespace App;


class Comment extends Model
{
    //
    public function post()
    {
    	return $this->belongsto(Post::class);
    }
    
    public function user()//to grab name $comment->user->name
    {
    	return $this->belongsto(User::class);
    }
}
