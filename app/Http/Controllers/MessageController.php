<?php

namespace App\Http\Controllers;
use App\Models\Message;


use Illuminate\Http\Request;

class MessageController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $getMessage = Message::find(1);
        return view('admin.message',['getMessage'=>$getMessage]);
    }


     public function storeMessage(Request $request)
    {

      

            if($request->message == null){
              $message = Message::find(1);
            $message->message = strip_tags($request->message);  
             $message->save();
             return back()->with('success','Message has been Clear.'); 
            }else{
                $message = Message::find(1);
            $message->message = strip_tags($request->message);        
            $message->save();

            return back()->with('success','Notice has been Sent.');

            }
            
      
       
       
    }


   
}
