<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add()
  {
      return view('admin.post.enter');
      
  
  }

  public function top(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Post::where('title', $cond_title)->get();
      } else {
          $posts = Post::all();
      }
      return view('admin.post.top', ['posts' => $posts, 'cond_title' => $cond_title]);
     return view('admin.post.top');
  }
  public function register(Request $request)
  {
      return view('admin.post.register');
  }
  
  public function login(Request $request)
  {
      return view('admin.post.login');
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
      
      return redirect('admin/post/enter');

  }
  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Post::where('title', $cond_title)->get();
      } else {
          $posts = Post::all();
      }
      return view('admin.post.index', ['posts' => $posts, 'cond_title' => $cond_title]);
      }
  
  public function profile(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Post::where('title', $cond_title)->get();
      } else {
          $posts = Post::all();
      }
      $post = new Post;
      $form =$request->all();
      unset($form['_token']);
       $post->fill($form);
      $post->user_id = Auth::id();
      $post->save();
      

      return view('admin.post.profile', ['posts' => $posts, 'cond_title' => $cond_title]);
      return view('admin.post.profile');

  }
  public function search(Request $request)
  {
      return view('admin.post.search');

  }
  public function detail(Request $request)
  {
      return view('admin.post.detail');

  }

public function edit(Request $request)
{
    $post = Post::find($request->id);
    if (empty($post)) {
        abort(404);
    }
    return view('admin.post.edit', ['post_form' => $post]);
}

public function update(Request $request)
{
    $this->validate($request, Post::$rules);
    $post = Post::find($request->id);
      $post_form = $request->all();
      unset($post_form['_token']);

      $post->fill($post_form)->save();

      return redirect('admin/post');
}

public function delete(Request $request)
  {
      $post = Post::find($request->id);
      $post->delete();
      return redirect('admin/post');
  }  

}