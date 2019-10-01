<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\jobs\MailEnrollJob;
use App\Courses;
use App\CourseEnroll;
use DB;


class EnrollController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function enroll($id)
    {
        
        $enroll = Courses::find($id);
        $current_user = auth()->user();
        $exists = DB::table('course_enroll')->where('user_id', $current_user->id)->where('name',  $enroll->name)->first();
        if(!$exists){
        // Adding data to sql
        $course = new CourseEnroll;
        $course->name = $enroll->name;
        $course->description = $enroll->description;
        $course->course_id = $enroll->id;
        $course->membername = $current_user->name;
        $course->local_id = $current_user->userid;
        $course->user_id = $current_user->id;
        $course->reg_id = rand(111111, 999999);
        $course->save();
        
        $data = array(
            'course' => $course->name,
            'membername' => $course->membername,
            'reg_id' => $course->reg_id,
            'description' => $course->description
        );

        Mail::send('emails.enrolled', $data, function($course) use ($data, $current_user, $enroll){
            //$course->from('enrolled@gshatech.com');
            $course->to($current_user->email);
            $course->subject('Hi '.$current_user->name.' your are Enroll for '.$enroll->name.' Course');
        });

       // $user = auth()->user();

       // dispatch(new MailEnrollJob($user, $data));
        
        return redirect('/home')->with('enroll', 'Your are Enroll Successfully');
        } else {
            return redirect('/home')->with('enrolled', 'You are already Enrolled for '.$enroll->name);
        }
    }

    
}
