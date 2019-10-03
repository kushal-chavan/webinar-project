<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseEnroll;
use App\User;
use App\Webinar;
use DB;
use Auth;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')
        ->with('mycourses', $user->mycourses)
        ->with('livemember', $user->livemember);
    }

    public function profile()
    {
        $profile = auth()->user();
        return view('user_profile')->with('profile', $profile);
    }

    // Member or user Change password function

    public function changepassworduser(Request $request){
        
        return view('changepassworduser');
    }

    public function passwordchangeuser(Request $request){
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
        return redirect('/changepassword')->with("cpsuccess","Password changed successfully !");
    }

}
