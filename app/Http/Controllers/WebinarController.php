<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\User;
use App\Webinar;
use App\LiveWebinar;
use App\CourseEnroll;
use DB;


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
        $add = LiveWebinar::all();
        return view('adminpanel.start_webinar')
        ->with('users', $users)
        ->with('add', $add)
        ->with('w_courses', $w_courses);
    }

    public function addtowebinar(Request $request, $id)
    {
        $this->validate($request, [
            'webinar_id' => 'required',
            'user_id' => 'required',
            'member_name' => 'required',
            'course_name' => 'required',
            'webinar_link' => 'required',
            'webinar_status' => 'required',
        ]            
        );
        $exists = DB::table('live_webinar')->where('user_id', $request->input('user_id'))->where('member_name',  $request->input('member_name'))->first();
        if(!$exists){
        $update = Webinar::find($id);
        $live = new LiveWebinar;
        $live->webinar_id = $request->input('webinar_id');
        $live->user_id = $request->input('user_id');
        $live->member_name = $request->input('member_name');
        $live->course_name = $request->input('course_name');
        $live->webinar_link = $request->input('webinar_link');
        $live->webinar_status = $request->input('webinar_status');
        $live->save();
        return redirect('adminarea/start_webinar')->with('webinar', 'Member is Added to webinar session');
        } else {
            return redirect('adminarea/start_webinar')->with('webinar', $request->input('member_name').' is already in webinar');
        }
    }
    // Remove Member from webinar Session
    public function removemember($id)
    {
        $delete = LiveWebinar::find($id);
        $delete->delete();
        return redirect('/adminarea/start_webinar')->with('webinardeleted', 'Member Removed Successfully');
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
