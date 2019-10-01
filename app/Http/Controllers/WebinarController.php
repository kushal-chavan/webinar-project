<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\User;
use App\Webinar;
use App\LiveWebinar;
use App\CourseEnroll;


class WebinarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $w_courses = Courses::all();
        return view('adminpanel.webinar')->with('w_courses', $w_courses);
    }

    public function mywebinar()
    {
        $mywebinar = Webinar::all();
        return view('adminpanel.mywebinar')->with('mywebinar', $mywebinar);
    }
    
    public function start()
    {
        $users = CourseEnroll::all();
        $w_courses = Webinar::all();
        return view('adminpanel.start_webinar')
        ->with('users', $users)
        ->with('w_courses', $w_courses);
    }

    public function addtowebinar(Request $request, $id)
    {
        $this->validate($request, [
            'webinar_id' => 'required',
            'user_id' => 'required',
            'course_name' => 'required',
            'webinar_link' => 'required',
            'webinar_status' => 'required',
        ]            
        );
        $update = Webinar::find($id);
        $live = new LiveWebinar;
        $live->webinar_id = $request->input('webinar_id');
        $live->user_id = $request->input('user_id');
        $live->course_name = $request->input('course_name');
        $live->webinar_link = $request->input('webinar_link');
        $live->webinar_status = $request->input('webinar_status');
        $live->save();
        return redirect('adminarea/start_webinar')->with('webinar', 'Added to webinar session');
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'course_name' => 'required',
            'webinar_link' => 'required',
        ]            
        );

        $webinar = new Webinar;
        $webinar->webinar_id = rand(1000, 8542);
        $webinar->course_name = $request->input('course_name');
        $webinar->webinar_link = $request->input('webinar_link');
        $webinar->webinar_status = "active";
        $webinar->users = 0;
        $webinar->save(); 
        return redirect('/adminarea/webinar')->with('webinar', 'Webinar has been created.');
    }

    public function deletewebinar($id)
    {
        $delete = Webinar::find($id);
        $delete->delete();
        return redirect('/adminarea/mywebinar')->with('webinardeleted', 'Webinar Deleted Successfully');
    }
}
