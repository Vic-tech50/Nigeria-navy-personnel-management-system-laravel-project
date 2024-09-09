<?php

namespace App\Http\Controllers;
use App\Models\TakeALeave;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Auth;
use Str;
use Carbon\Carbon;

class UserDashController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }


    public function submit_assignment()
    {
        return view('user.submit_assignment');
    }

     public function take_a_leave()
    {
        return view('user.take_a_leave');
    }

  

     public function history()
    {
         $currentTime = Carbon::now();

        $leave = TakeALeave::where('employeeId', Auth::user()->employeeId)->latest()->get();
        $ass = Assignment::where('employeeId', Auth::user()->employeeId)->latest()->get();
        $leave_info = TakeALeave::where('employeeId', Auth::user()->employeeId)->latest()->first();
        $ass_info = Assignment::where('employeeId', Auth::user()->employeeId)->latest()->first();

        return view('user.history', ['leave' => $leave,
         'leave_info' => $leave_info,
         'ass' => $ass,
         'ass_info' => $ass_info,
         'current' => $currentTime,
     ]);
    }

    public function send_leave_purpose(Request $request)
    {

        $request->validate([
             
            
            'purpose' => 'required',
            'message' => 'required',
           

            ]);

        $take_a_leave = new TakeALeave;
        $take_a_leave->image = Auth::user()->image;
        $take_a_leave->name = Auth::user()->name;
        $take_a_leave->status= 1;
        $take_a_leave->employeeId = Auth::user()->employeeId;
        $take_a_leave->purpose = Str::ucfirst($request->purpose);
        $take_a_leave->start_date = $request->start_date;
        $take_a_leave->end_date = $request->end_date;
        $take_a_leave->message = strip_tags($request->message);

        $take_a_leave->save();

        return back()->with('success', 'Your Message Has Been Submitted, Wait for Approval');
    }


      public function assignment_upload(Request $request)
    {
 
        $request->validate([
            'pdf' => 'mimes:pdf|max:10240', 
            'title' => 'required', 

            ]);

if($request->pdf != null){
      $pdf = $request->file('pdf');
    $file = $pdf->getClientOriginalName();
      $destinationPath = public_path('/uploads');

    $pdf->move($destinationPath, $file);

}

            $assignment = new Assignment;
            if($request->pdf != null){
            $assignment->pdf = $file;
        }
            $assignment->title = Str::ucfirst($request->title);
            $assignment->caption = strip_tags($request->message);
            $assignment->name = Auth::user()->name;
            $assignment->employeeId = Auth::user()->employeeId;
         
            $assignment->save();
            // Mail::to($request->email)->send(new LoginDetails($user)); 

            return back()->with('success','Assignment Submitted successfully.');
      
       
       
    }



}
