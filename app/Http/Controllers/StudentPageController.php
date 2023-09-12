<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    public function show_all_student()
    {
       $allStudents = Students::paginate(20);
       return view('pages.frontend.students', ['students' => $allStudents]);
    }
}
