<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class ShowStudentsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function show_all_student()
   {
      $allStudents = Students::paginate(5);
      return view('pages.dashboard.allStudents', ['students' => $allStudents]);
   }
}
