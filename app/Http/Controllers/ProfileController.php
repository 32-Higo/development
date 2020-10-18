<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Profile;

class ProfileController extends Controller
{
    
    
    public function edit(Request $request)
    {
        
        $profile = Profile::where('user_id', Auth::id())->first();

        return view('profile.edit', ['profile' => $profile]);
    }
    public function update(Request $request)
    {
        
        $profile= new Profile;
        $form = $request->all();
      
      unset($form['_token']);

      $profile->fill($form);
      $profile->user_id = Auth::id();
    //   $profile->gender = Auth::id();
    //   $profile->introduction = Auth::id();
      $profile->save();
      
    }
    
     public function mypage(Request $request)
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
          $posts = Post::where('title', $cond_title)->get();
        } else {
          $posts = Post::all();
        }
        
        return view('post.profile', ['posts' => $posts, 'cond_title' => $cond_title, 'profile' => $profile]);
    
    }

} 