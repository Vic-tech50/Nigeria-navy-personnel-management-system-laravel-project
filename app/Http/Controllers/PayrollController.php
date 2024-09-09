<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\User;
use Illuminate\Http\Request;

class PayrollController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payroll = Payroll::orderBy('salary', 'desc')->get();
        return view('payroll.index', ['payroll'=> $payroll]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('payroll.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
              
            //code...
             
        $request->validate([
            'position' => 'required|unique:payrolls',
            'salary' => 'required|numeric',
            ]);

            $payroll = new Payroll;
            $payroll->position = $request->position;
            $payroll->salary = $request->salary;
            $payroll->save();

            return back()->with('success','New Position has been added to the payroll.');
       
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Payroll $payroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payroll $payroll)
    {
        return view('payroll.index',compact('payroll'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
             
            'position' => 'required',
            'salary' => 'required',
           

            ]);
            $payroll = Payroll::find($id);
          
            $payroll->position = $request->position;
            $payroll->salary = $request->salary;
           
            $payroll->save();

            return back()->with('success','Payroll has been Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payroll $payroll)
    {
        $payroll->delete();
return redirect()->route('payroll.index')->with('success','Deleted');
    }

      public function showPayroll(Request $request)
    {
            $position = $request->position;
           $show = User::where('position', $position)->get();

       
            return view('payroll.show', ['show'=>$show]);
           
    }

   
}
