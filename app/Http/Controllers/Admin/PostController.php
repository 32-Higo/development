<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function add()
  {
      return view('admin.post.top');
     
  }
  
  public function top()
  {
     
  }
  
  public function register(Request $request)
  {
      return view('admin.post.register');
  }
  
  public function login(Request $request)
  {
      return view('admin.post.login');
  }
  
  public function enter(Request $request)
  {
      $this->validate($request, Post::$rules);
      $post = new Post;
      $form =$request->all();
      unset($form['_token']);
      $post->fill($form);
      $post->save();
      
      return view('admin.post.enter');
      return redirect('admin/post/enter');

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
