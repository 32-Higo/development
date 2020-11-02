<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Profile;

class PostController extends Controller
{
    public function add()
    {
        
        return view('post.enter');
    }
    
    public function top(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Post::where('title', $cond_title)->get();
        } else {
            $posts = Post::all();
        }
        
        return view('post.top', ['posts' => $posts, 'cond_title' => $cond_title]);
        return view('post.top');
    }
    
    public function register(Request $request)
    {
      
        return view('post.register');
    }
  
    public function login(Request $request)
    {
        
        return view('post.login');
    }
  
    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form =$request->all();
        unset($form['_token']);
        $post->fill($form);
        $post->user_id = Auth::id();
        $post->save();
      
        return redirect('post/enter');
    }
  
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Post::where('title', 'LIKE', "%{$cond_title}%")->orderBy('created_at','desc')->paginate(5);
        } else {
          $posts = Post::all();
        }
        return view('post.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
  
    public function profile(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form =$request->all();
        unset($form['_token']);
        $post->fill($form);
        $post->user_id = Auth::id();
        $post->save();
        
        
        
        return redirect('post/profile');
    }
    
    public function search(Request $request)
    {
        
        return view('post.search');

    }
    public function detail(Request $request)
    {
        
        return view('post.detail');
    }

    public function edit(Request $request)
    {
        $post = Post::find($request->id);
        if (empty($post)) {
        abort(404);
    }
        
        return view('post.edit', ['post_form' => $post]);
    }
   
    public function update(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = Post::find($request->id);
        $post_form = $request->all();
        unset($post_form['_token']);
        $post->fill($post_form)->save();

        return redirect('post/profile');
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        
        return redirect('post');
    }  

    public function show(Request $request)
    {
        $post = Post::find($request->id);
        return view('post.show', ['post' => $post]);
    }
    
    } 