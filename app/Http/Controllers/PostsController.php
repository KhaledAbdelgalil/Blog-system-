<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;//for time
class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        
        $posts=Post::latest()->filter(request(['month','year']))->get();
     

    	return view('posts.index',compact('posts','Archives'));
    }
     public function create()
    {
    	return view('posts.create');
    }

    public function show(Post $post)
    {

        //$post=Post::find($id);
    	return view('posts.show',compact('post'));
    }
    public function store()
    {
        /*first-method
        //create a new post using request data 
        $post=new Post;
        $post->title=request('title');
        $post->body=request('body');
        //save it into database
        $post->save();
        //redirect somewhere to application
        return redirect('/');*/

        /*Post::create([
            'title'=>request('title'),
            'body'=>request('body')
        ]);*/
        $this->validate(request(),['title'=>'required','body'=>'required']);
        
        auth()->user()->publish(new Post(request(['title','body'])));
        /*Post::create([
            'title'=>request('title')
            ,'body'=>request('body'),
            'user_id'=>auth()->id()
        ]);*/
        session()->flash('message','Your post has now been published.');
        return redirect('/');

    }

}
