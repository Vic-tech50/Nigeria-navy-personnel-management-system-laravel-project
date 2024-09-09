<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Hash;

class SettingsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.settings');
    }

   public function user_profile()
    {
        return view('user.user_profile');
    }

            public function admin_pass(Request $request,User $id)
    {
          $request->validate([
        'password' => 'required|string|min:8|confirmed', 
        
    ]);
        
            $user = User::find($request->id);
            $user->password = Hash::make($request->password);
            
            $user->save();
            return back()->with('success','Your Password Has Been Updated successfully.');
    }


     public function update_profile(Request $request, User $id)
    {
            $user = User::find($request->id);
            $user->name = Str::ucfirst($request->fullname);
            
            $user->email = $request->email;
            $user->phonenumber = $request->phonenumber;
           

            $user->save();

            return back()->with('success','Data has been Updated successfully.');
    }


      public function update_user_profile(Request $request, User $id)
    {
            $user = User::find($request->id);

            $user->name = Str::ucfirst($request->fullname);
            $user->email = $request->email;
            $user->phonenumber = $request->phonenumber;
            $user->dateofbirth = $request->dateofbirth;
            $user->marital_status = $request->marital;
            $user->hobby = $request->hobby;
            $user->state = $request->state;
            // $user->phonenumber = $request->phonenumber;
           

            $user->save();

            return back()->with('success','Data has been Updated successfully.');
    }
}
