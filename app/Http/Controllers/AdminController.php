<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\User;
use App\CourseEnroll;
use DB;
use Auth;
use Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = DB::table('users')->get()->count();
        $course = DB::table('courses')->get()->count();
        $enroll = DB::table('course_enroll')->get()->count();
        return view('adminpanel.index')
        ->with(compact('user'))
        ->with(compact('course'))
        ->with(compact('enroll'));
    }

    public function courses()
    {
        $courses = Courses::all();
        return view('adminpanel.courses')->with('courses', $courses);
    }

    public function addcourse()
    {
        return view('adminpanel.add_course');
    }

    public function postcourse(Request $request){
        $this->validate($request, [
            'coursetitle' => 'required',
            'coursecategory' => 'required',
            'coursetime' => 'required',
            'coursedes' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]            
        );

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //create
        $course = new Courses;
        $course->name = $request->input('coursetitle');
        $course->category = $request->input('coursecategory');
        $course->time = $request->input('coursetime');
        $course->description = $request->input('coursedes');
        $course->cover_image = $fileNameToStore;
        $course->save();        
       
    return redirect('/adminarea/addcourse')->with('courseadded', 'Course Added Successfully');
    }

    public function deletecourse($id)
    {
        $delete = Courses::find($id);
        $delete->delete();
        return redirect('/adminarea/courses')->with('coursedeleted', 'Course Deleted Successfully');
    }

    public function profile()
    {
        $profile = auth()->user();
        return view('adminpanel.user_profile')->with('profile', $profile);
    }

    public function users()
    {
        $users = User::all();
        return view('adminpanel.users')->with('users', $users);
    }

    public function enrolledusers()
    {
        $users = CourseEnroll::all();
        return view('adminpanel.enrolled_users')->with('users', $users);
    }

    public function chat()
    {
        return view('adminpanel.chat_view');
    }

    // Adminarea Change password function

    public function changepassword(Request $request){
        
        return view('adminpanel.changepassword');
    }

    public function passwordchange(Request $request){
        $this->validate($request, [
            'current-password' => 'required',
            'new-password' => 'required',
            'new-password_confirmation' => 'required',
        ]            
        );
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        if($request->get('new-password') != $request->get('new-password_confirmation')){
            //new password and confirm password are different
            return redirect()->back()->with("error","Your New Password does not matches with Confirm Password");
        }
        if(strlen($request->get('new-password')) < 8){
            //new password should be minimum 8 characters
            return redirect()->back()->with("error","Minimum 8 Characters");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect('/adminarea/changepassword')->with("cpsuccess","Password changed successfully !");
    }
}
