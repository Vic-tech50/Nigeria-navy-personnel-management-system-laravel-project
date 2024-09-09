@extends('layouts.main')

@section('content')


  <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                       
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="admin/home">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Personnel Leave</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 <!-- Static Table Start -->
        <div class="static-table-area mg-t-15">
            <div class="container-fluid">
                <div class="">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1 class="w3-text-white">Personnel on leave</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list w3-responsive ">
                                    <table class="w3-table w3-bordered w3-hoverable w3-text-white" id="tab" style="">
                                        <thead>
                                                  
                                            <tr class="w3-text-red">
                                                <th>#</th>
                                                <th>Passport</th>
                                                <th>Name</th>
                                                <th>Purpose</th>
                                                <th>From - TO</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                 @foreach($employee as $employee)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>

                                                    <div class="w3-dropdown-hover dropup"><img src="uploads/{{$employee->image}}" style="width: 50px; height: 50px;" class="w3-circle" alt = "Passport" >
 
</div>

                                                </td>
                                              
                                                <td>{{$employee->name}} <br> {{$employee->employeeId}}</td>
                                                
                                                <td><b>{{$employee->purpose}}</b> <br> {{$employee->message}}</td>
                                                <td>{{$employee->start_date}} ~ {{$employee->end_date}} </td>
                                                <td >@if($current >= $employee->end_date )
                                                   <i class="fa fa-circle w3-text-red"> Expired</i>
                                                    @elseif($employee->status == 1)
                                                    <p class="">Waiting...</p>

                                                      @elseif($employee->status == 2)
                                                    <p class="w3-text-red"">Cancelled</p>

                                                    @else
                                                   <i class="fa fa-undo fa-spin fa-lg w3-text-green" title="Active"></i>
                                                    
                                                    @endif
                                                </td>
                                                <td>{{$current}}</td>
    <td>
          <div class = "row">

                    <div class = "col-lg-2">
       <form action="/approve_leave" method="Post">
        @csrf
    <input type="hidden" name="id" value="{{$employee->id}}">
    
    <button class="btn btn-success " style = '' class='w3-text-green'><i class="fa fa-check"></i></button>
</form>
    </div>
                    <div class = "col-lg-2">

   <form action="/cancel_leave" method="Post">
        @csrf
    <input type="hidden" name="id" value="{{$employee->id}}">
    
    <button class="btn btn-info " style = '' class='w3-text-red'><i class="fa fa-times"></i></button>
</form>
</div>


            <div class = "col-lg-2">

   <form action="/delete_leave" method="Post">
        @csrf
    <input type="hidden" name="id" value="{{$employee->id}}">
    
    <button class="btn btn-danger " style = '' class='w3-text-red'><i class="fa fa-trash"></i></button>
</form>
</div>


</div>
    </td>
                                            </tr>
                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
             
            </div>
        </div>
        <!-- Static Table End -->

        @endsection