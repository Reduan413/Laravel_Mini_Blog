<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth');
   }

   public function show_post()
   {
      $posts = Post::whereUserId(Auth::id())->get();
      return view('dashboard', ['posts' => $posts]);
   }
}
