<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Payroll;
use App\Models\Notification;
use App\Models\TakeALeave;
use App\Models\Assignment;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log; // Import the Log facade
use App\Mail\LoginDetails;
use App\Mail\Sacked;
use App\Mail\SackedWithLetter;
use App\Mail\Pardon;
use App\Mail\Posting;
use App\Mail\Rank;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }


//     public function index()
//     {
//         $currentTime = Carbon::now();
//         $employee = User::where('type', '=', 0)->latest()->get();
//         $notice = Notification::all();
//         $employ = User::where('id', '=', 10)->first();
//         $mess = '';

//         foreach ($employee as $key => $value) {
//            if($currentTime >= $value->rank_retired_at ){
// Mail::to('ok75@gmail.com')->send(new Rank());
// }

//         }

    public function index()
{
    $currentTime = Carbon::now();
    $employee = User::where('type', '=', 0)->latest()->get();
    // $employees = User::where('type', '=', 0)
    //                  ->where('rank_retired_at', '>=', $currentTime)
    //                  ->latest()
    //                  ->get();
    $notice = Notification::all();
    // $specificEmployee = User::where('id', '=', 10)->first();
    $mess = '';

    // foreach ($employees as $employee) {
    //     try {
    //         Mail::to('ok75@gmail.com')->send(new Rank());
    //         $employee->email_sent = true;
    //         $employee->save();
    //     } catch (\Exception $e) {
    //         // Log the exception or handle the error as needed
    //         Log::error('Error sending email: ' . $e->getMessage());
    //     }
    // }

      return view('employee.index', ['employee' => $employee, 'current' => $currentTime, 
            'notice' => $notice,
            'mess' => $mess,
            // 'noticeNum' => $noticeNum
        ]);
}

        

      
      
    

        public function on_leave()
    {
       $currentTime = Carbon::parse(now())->format('Y-m-d');
        $employee = TakeALeave::latest()->get();
      
        return view('admin.on_leave', ['employee' => $employee, 'current' => $currentTime,]);
    }

      public function approve_leave(Request $request, TakeALeave $id)
    { 
            $take_a_leave = TakeALeave::find($request->id);
           $take_a_leave->status = 3;
            $take_a_leave->save();
             // Mail::to($request->email)->send(new Pardon($user)); 
            return back()->with('success','Personnel Leave Approved!');
    }


       public function delete_leave(Request $request, TakeALeave $id)
    { 
            $take_a_leave = TakeALeave::find($request->id);
           $take_a_leave->delete();
            return back()->with('success','Personnel Leave Deleted');
    }


     public function delete_assignment(Request $request)
    { 
            $take_a_leave = Assignment::find($request->id);
           $take_a_leave->delete();
            return back()->with('success','Assignment Deleted');
    }


       public function cancel_leave(Request $request, TakeALeave $id)
    {
            $take_a_leave = TakeALeave::find($request->id);
           $take_a_leave->status = 2;
            $take_a_leave->save();
             // Mail::to($request->email)->send(new Pardon($user)); 
            return back()->with('success','Personnel Leave Not Approved!');
    }



     public function create()
    {
         $payrollInfo = Payroll::all();
        return view('employee.create', ['payroll'=>$payrollInfo]);
    }

     public function store(Request $request)
    {

         if($request->time == 'Hours'){
                $time = Carbon::now()->addHours($request->duration);
                }elseif($request->time == 'Days'){
                   $time = Carbon::now()->addDays($request->duration);
                }elseif($request->time == 'Weeks'){
                    $time = Carbon::now()->addWeeks($request->duration);
                 }elseif($request->time == 'Year'){
                    $time = Carbon::now()->addYears($request->duration);
                 }elseif($request->time == 'Minutes'){
                    $time = Carbon::now()->addMinutes($request->duration);
                 }elseif($request->time == 'Months'){
                    $time = Carbon::now()->addMonths($request->duration);
                 }else{
                    $time = Carbon::now()->addSeconds($request->duration);

                 }

            $date = Carbon::parse(now());
            $year = $date->format('Y');

        $str  = Str::random(10);
        $emId = 'NNMS'.rand(00000, 99999).$year;

        // $string = $request->position;
        // $parts = explode(' ', $string);
        // $role = end($parts);

        // $string2 = $request->position;
        // $partOne = explode(' ', $string2);
        // $number = $partOne[0];
 
         
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10485760', 
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required|unique:users',
            'phonenumber' => 'required|numeric|unique:users',
            'dateofbirth' => 'required',
            'gender' => 'required',
            'poa' => 'required', 
            'parentname' => 'required',
            'parentnumber' => 'required|numeric',
            'familyaddress' => 'required',
            'nokname' => 'required',
            'noknumber' => 'required|numeric',
            'nokaddress' => 'required',
            'relationship' => 'required',
            'marital' => 'required',
            'hobby' => 'required',
            'country' => 'required',
            'state' => 'required',
            'qualification' => 'required',
            'study' => 'required',
            'time' => 'required',
            'duration' => 'required',

           


            ]);



      $image = $request->file('image');
      // dd($image);

    $img = $image->getClientOriginalName();
      $destinationPath = public_path('/uploads');

    $image->move($destinationPath, $img);

            $user = new User;
            $user->image = $img;
            $user->name = Str::ucfirst($request->fullname);
            $user->address = $request->address;
            $user->email = $request->email;
            $user->phonenumber = $request->phonenumber;
            $user->dateofbirth = $request->dateofbirth;
            $user->gender = $request->gender;
            $user->place_of_assignment = $request->poa;
            $user->time = $request->time;
            $user->duration = $request->duration;
            $user->salary = 70000;
            $user->position = 'Ordinary Seaman';
            $user->parentname = $request->parentname;
            $user->parentnumber = $request->parentnumber;
            $user->familyaddress = $request->familyaddress;
            $user->nokname = $request->nokname;
            $user->noknumber = $request->noknumber;
            $user->nokaddress = $request->nokaddress;
            $user->relationship = $request->relationship;
            $user->marital_status = $request->marital;
            $user->hobby = $request->hobby;
            $user->country = $request->country;
            $user->state = $request->state;
            $user->qualification = $request->qualification;
            $user->study = $request->study;
            $user->status = 1;
            $user->status_poa = 1;
            $user->type = 0;
            $user->password = bcrypt($str);
            $user->word = $str;
            $user->employeeId = $emId;
            $user->retired_at= $time;
            $user->retired_at= $time;
            $user->retired_at= $time;

            $user->save();
            Mail::to($request->email)->send(new LoginDetails($user)); 

            return back()->with('success','Personnel has been Added successfully.');
      
       
       
    }

      public function edit(user $employee)
    {
        $payrollInfo = Payroll::all();
    return view('employee.edit',compact('employee'), ['payroll'=>$payrollInfo]);
    }


     public function update(Request $request, string $id)
    {

    
         
        $request->validate([
             
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phonenumber' => 'required|numeric',
            'dateofbirth' => 'required',
            'marital_status' => 'required',
            'country' => 'required',
            'state' => 'required',
            'qualification' => 'required',
            'study' => 'required',

            ]);




            $user = User::find($id);
          
            $user->name = Str::ucfirst($request->fullname);
            $user->address = $request->address;
            $user->email = $request->email;
            $user->phonenumber = $request->phonenumber;
            $user->dateofbirth = $request->dateofbirth;
            $user->marital_status = $request->marital_status;
            $user->country = $request->country;
            $user->state = $request->state;
            $user->qualification = $request->qualification;
            $user->study = $request->study;
           

            $user->save();

            return back()->with('success','Personnel has been Updated successfully.');
    }



      public function destroy(User $employee)
    {
    $employee->delete();
    return redirect()->route('employee.index')->with('success','Personnel has been deleted successfully');
    }

   
    public function promoteWorker(Request $request, User $id)
    {


        if($request->time == 'Hours'){
                $time = Carbon::now()->addHours($request->duration);
                }elseif($request->time == 'Days'){
                   $time = Carbon::now()->addDays($request->duration);
                }elseif($request->time == 'Weeks'){
                    $time = Carbon::now()->addWeeks($request->duration);
                 }elseif($request->time == 'Year'){
                    $time = Carbon::now()->addYears($request->duration);
                 }elseif($request->time == 'Minutes'){
                    $time = Carbon::now()->addMinutes($request->duration);
                 }elseif($request->time == 'Months'){
                    $time = Carbon::now()->addMonths($request->duration);
                 }else{
                    $time = Carbon::now()->addSeconds($request->duration);
}

          $string = $request->newposition;
        $parts = explode(' ', $string);
        $role = end($parts);

        $string2 = "$request->newposition";
        $partOne = explode(' ', $string2);
        $number = $partOne[0];

            $user = User::find($request->id);
           $user->position = $request->newposition;
           // $user->salary = $number;/
           $user->rank_retired_at = $time;
            $user->rank_time = $request->time;
            $user->rank_duration = $request->duration;
            $user->start_time = Carbon::now();
           // $user->salary = $number;
            $user->save();
            return back()->with('success','Personnel successfully Advanced');
    }

     public function sackWorker(Request $request, User $id)
    {
            $user = User::find($request->id);
           $user->type = 2;
            $user->save();
             Mail::to($request->email)->send(new Sacked($user)); 
            return redirect('employee')->with('success','Personnel has been Fired!');
    }

      public function letterSack(Request $request, User $id)
    {
        // strip_tags($htmlString);
        $user = User::find($request->id);
        $user->letter = strip_tags($request->letter);
        $user->type = 2;
        $user->save();
             Mail::to($request->email)->send(new SackedWithLetter($user)); 
         return redirect('employee')->with('success','Sack Letter has been sent and Employee has been Fired!');
    }


      public function pardonWorker(Request $request, User $id)
    {
            $user = User::find($request->id);
           $user->type = 0;
            $user->save();
             Mail::to($request->email)->send(new Pardon($user)); 
            return back()->with('success','Personnel has been Pardoned!');
    }

       public function refresh(Request $request)
    {
            $user = User::find($request->id);
           $user->status_poa = 1;
            $user->save();
            
            return back()->with('success','Personnel has been Refreshed');
    }

     public function viewSackEmployee()
    {
        $employee = User::where('type', '=', 2)->latest()->get();
        return view('admin.sackedEmployee', ['employee' => $employee]);
    }


public function profile()
{
    return view('user.user_profile');
}

    public function assignment()
    {
        $ass = Assignment::latest()->get();
        return view('admin.ass', ['ass' => $ass]);
    }


       public function confirm_assignment(Request $request, User $id)
    {
            $user = Assignment::find($request->id);
           $user->status = 1;
            $user->save();
             // Mail::to($request->email)->send(new Pardon($user)); 
            return back()->with('success','Task Completed!');
    }

 public function update_poa(Request $request)
    {


        if($request->time == 'Hours'){
                $time = Carbon::now()->addHours($request->duration);
                }elseif($request->time == 'Days'){
                   $time = Carbon::now()->addDays($request->duration);
                }elseif($request->time == 'Weeks'){
                    $time = Carbon::now()->addWeeks($request->duration);
                 }elseif($request->time == 'Year'){
                    $time = Carbon::now()->addYears($request->duration);
                 }elseif($request->time == 'Minutes'){
                    $time = Carbon::now()->addMinutes($request->duration);
                 }elseif($request->time == 'Months'){
                    $time = Carbon::now()->addMonths($request->duration);
                 }else{
                    $time = Carbon::now()->addSeconds($request->duration);

                 }
         
        $request->validate([
            'poa' => 'required',
            'time' => 'required',
            'duration' => 'required|numeric',
           

            ]);

            $user = User::find($request->id);


          
            $user->place_of_assignment = $request->poa;
            $user->time = $request->time;
            $user->duration = $request->duration;
            $user->retired_at = $time;
            $user->status_poa = $user->status_poa + 1;
           
            $user->save();

            // Mail::to($request->email)->send(new Posting($user)); 

            return back()->with('success','Personnel Ship has been Updated successfully.');
    }

       public function change_image(Request $request)
    {

     
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10485760', 
          
            ]);



      $image = $request->file('image');
    $img = $image->getClientOriginalName();
      $destinationPath = public_path('/uploads');
    $image->move($destinationPath, $img);

            $user = User::find($request->id);
            $user->image = $img;
            $user->save();
            return back()->with('success','Image Changed');
      
       
       
    }
    

         public function search(Request $request)
    {
        $query = $request->input('query');
        $currentTime = Carbon::now();
        $employee = User::where('employeeId', 'like', "%$query%")->orWhere('name', 'like', "%$query%")->get();
     $mess = '';
        return view('employee.index', [
         
        'employee'=>$employee,
        'mess'=>$mess,
        'current'=>$currentTime,

            ]);
    }





}
