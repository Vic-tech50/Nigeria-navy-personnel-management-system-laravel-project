<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assignment;
use App\Models\TakeALeave;
use App\Models\Message;
use Carbon\Carbon;
use Auth;

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
        $notice = Message::find(1);
          $currentTime = Carbon::now();
          $leave = TakeALeave::where([['status', 3],['employeeId',  Auth::user()->employeeId]])->count();
        $ass = Assignment::where([['status', 1], ['employeeId',  Auth::user()->employeeId]])->count();
        return view('home', [
            'ass' => $ass,
            'current' => $currentTime,
            'leave' => $leave,
            'notice' => $notice,
        ]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $employee = User::where('type', 0)->count();
        $sacked_employee = User::where('type', 2)->count();
        $retired_employee = User::where('type', 2)->count();
        $ass = Assignment::where('status', 0)->count();
        return view('adminHome', [
            'employee' => $employee,
            'sacked_employee' => $sacked_employee,
            'ass' => $ass,
        ]);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }

    
    public function block()
    {
        
        return view('block');
    }
}
