<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function add()
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
  public function enter(Request $request)
  {
      return view('admin.post.enter');
  }
}
