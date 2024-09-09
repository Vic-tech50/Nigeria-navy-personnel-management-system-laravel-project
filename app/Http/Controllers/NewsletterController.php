<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Newsletter;
use App\Mail\Newletter;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $email = User::where('type', 0)->get();
        return view('admin.newsletter', ['email'=>$email]);
    }

     public function newsletter(Request $request){

        $string = $request->email;
        $parts = explode(' ', $string);
        $name = end($parts);

        $partOne = explode(' ', $string);
        $email = $partOne[0];

         $emails = User::where('type', 0)->pluck('email')->toArray();
          // Send email to all workers
        


        $this->validate($request, [
                        'email' => 'required',
                        'subject' => 'required',
                        // 'name' => 'required',
                        'message' => 'required',
                        
                        ]);

                        $newsletter = new Newsletter;

                        $newsletter->email = $email;
                        $newsletter->name = $name;
                        $newsletter->subject = $request->subject;
                        $newsletter->message = $request->message;
                        $newsletter->save(); 

                        if($request->email == 'All Users'){
                            
                              foreach ($emails as $email) {
            Mail::to($email)->send(new Newletter($newsletter));
        }
                        }
                     
                Mail::to($email)->send(new Newletter($newsletter));
                return back()->with('success', 'Mail Sent');

    }

      public function sendEmail(Request $request)
    {
        $subject = $request->input('subject');
        $content = $request->input('content');
        
        // Retrieve worker emails (You may need to adjust this depending on your database structure)
        $workerEmails = Worker::pluck('email')->toArray();

        // Send email to all workers
        foreach ($workerEmails as $email) {
            Mail::to($email)->send(new YourEmailMailable($subject, $content));
        }

        return redirect()->back()->with('success', 'Email sent to all workers successfully!');
    }



}
