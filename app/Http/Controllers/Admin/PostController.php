<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function add()
  {
      return view('admin.post.enter');
      
  
  }

  public function top()
  {
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

}
