<?php

namespace App;

use Carbon\Carbon;
class Post extends Model
{
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
    public function user()
    {
        return $this->belongsto(User::class);
    }
	public function addComment($body)
    {
       
    	$this->comments()->create(compact('body'));//create(['body'=>$body])
        /*Comment::create([
            'body'=>$body,
            'post_id'=>$this->id
         ]);*/
    }
    public function scopeFilter($query,$filters)
    {
        //dd($filters);
        if(count($filters)==2)
        {
            if($month=$filters['month'])
            {
                $query->whereMonth('created_at',Carbon::parse($month)->month);//created_at==month
            }

            if($year=$filters['year'])
            {
                $query->whereYear('created_at',$year);//created_at==5
            }
        }
    }
    public static function archives()
    {
       return static::selectRaw('year(created_at) year,monthname(created_at) month,count(*) published')->groupBy('year','month')->orderByRaw('min(created_at) desc')->get()->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
