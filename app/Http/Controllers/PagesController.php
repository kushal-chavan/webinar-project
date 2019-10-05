<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Courses;
use App\CourseEnroll;
use Mail;

class PagesController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('pages/index')->with('courses', $courses);
    }

    public function contact()
    {
        return view('pages/contacts');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function consulting()
    {
        return view('pages/consulting');
    }

    public function courses()
    {
        $courses = Courses::all();
        return view('pages/courses')->with('courses', $courses);
    }

    

    public function postcontact(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'msg' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('kushal.chavan120@gmail.com');
            $message->subject('Mail From GSHATECH');
        });

        return redirect('/contact');
    }
}
