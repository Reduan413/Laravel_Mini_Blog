<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('pages.dashboard.studentCreate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|file',
            'full_name' => 'required|string',
            'last_name' => 'required|string',
            'birthday' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
        ]);


        $user = $request->user();
        $student = new Students;
        $student->full_name = $request->full_name;
        $student->last_name = $request->last_name;
        $student->birthday = $request->birthday;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->subject = $request->subject;

        $image = null;
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $image_name = time() . '.' . $get_image->getClientOriginalExtension();
            $location = public_path('img/');
            $get_image->move($location, $image_name);
            $image = "img/" . $image_name;
        }
        $student->image = $image;

        $user->student()->save($student);

        // if ($request->file('image')) {
        //     // $image  = $request->file('img');
        //     // Storage::putFile('public/img/', $image);
        //     // $student->image = "storage/img/" . $image->hasName();
        // }





        return redirect(route('all_student'))->with('status', 'New Student Added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Students::find($id);
        return view('pages.dashboard.studentEdit', ['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|file',
            'full_name' => 'required|string',
            'last_name' => 'required|string',
            'birthday' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
        ]);


        $student = Students::find($id);
        $student->full_name = $request->full_name;
        $student->last_name = $request->last_name;
        $student->birthday = $request->birthday;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->subject = $request->subject;

        $image = null;
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $image_name = time() . '.' . $get_image->getClientOriginalExtension();
            $location = public_path('img/');
            $get_image->move($location, $image_name);
            $image = "img/" . $image_name;
        }
        $student->image = $image;

        $student->save();
        return redirect(route('all_student'))->with('status','Student Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Students::destroy($id);
        return redirect(route("all_student"))->with('status','Student Deleted !!');
    }
}
