<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\User;
use App\Webinar;
use App\Support;
use App\CallRequest;
use App\CourseEnroll;

class SupportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Support page view
    public function support()
    {
        return view('support_page');
    }

    public function sendsupport(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required',
            'department' => 'required',
            'message' => 'required'
        ]);

        $support = new Support;
        $support->subject = $request->input('subject');
        $support->department = $request->input('department');
        $support->message = $request->input('message');
        $support->status = "UNSOLVED";
        $support->user_id = auth()->user()->userid;
        $support->user_name = auth()->user()->name;
        $support->user_email = auth()->user()->email;
        $support->save();

        return redirect('/support')->with('sendsupport', 'Message sent successfully, Our Team will Reply you soon');
    }

    public function callrequest(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required',
            'language' => 'required',
        ]);

        $callrequest = new CallRequest;
        $callrequest->phone_number = $request->input('phone');
        $callrequest->language = $request->input('language');
        $callrequest->status = "UNSOLVED";
        $callrequest->user_id = auth()->user()->userid;
        $callrequest->user_name = auth()->user()->name;
        $callrequest->user_email = auth()->user()->email;
        $callrequest->save();

        return redirect('/support')->with('callrequest', 'Request Received, Our Team contact you soon.');
    }

    // For Admin Area
    public function tickets()
    {
        $tickets = Support::all();
        return view('adminpanel.tickets')->with('tickets', $tickets);
    }

    public function solve(Request $request, $id){
        $this->validate($request, [
            'status' => 'required',
        ]);

        $update = Support::find($id);
        $update->status = $request->input('status');
        $update->save();

        return redirect('/adminarea/tickets')->with('ticket', 'Ticket status updated');
    }

    // Call Request table for admin
    public function callme()
    {
        $callreq = CallRequest::all();
        return view('adminpanel.call_support')->with('callreq', $callreq);
    }

    public function call(Request $request, $id){
        $this->validate($request, [
            'callstatus' => 'required',
        ]);

        $update = CallRequest::find($id);
        $update->status = $request->input('callstatus');
        $update->save();

        return redirect('/adminarea/callme')->with('ticket', 'Ticket status updated');
    }
}
