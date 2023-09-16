<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Students;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth');
   }

   public function show_post()
   {
        $allPosts = Post::all();
        $posts = Post::whereUserId(Auth::id())->get();
        $allStudents = Students::all();
        $Students = Students::whereUserId(Auth::id())->get();
      return view('pages.dashboard.dashboard', ['allPosts'=>$allPosts,'posts' => $posts,'allStudents'=>$allStudents,'Students' => $Students]);
   }
}
