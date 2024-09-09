@extends('layouts.main')

@section('content')

<style>
         #tab{
            color: black;
         }
</style>

 <!-- Mobile Menu end -->
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
                                            <li><span class="bread-blod">Sacked Personnel</span>
                                            </li>
                                        </ul>
                                    </div>
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
                                    <h1 class="w3-text-white">AWOL Personnels</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list w3-responsive ">
                                    <table class="w3-table w3-bordered w3-hoverable w3-text-white" id="tab" style="">
                                        <thead>
                                                  
                                            <tr class="w3-text-red">
                                                <th>#</th>
                                                <th>Passport</th>

                                                <th>ID Number</th>
                                                <th>Fullname</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Member Since</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                  @foreach($employee as $employee)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>

                                                    <div class="w3-dropdown-hover dropup"><img src="uploads/{{$employee->image}}" style="width: 50px; height: 50px;" class="w3-circle" alt = "Passport" >
  <div class="w3-dropdown-content w3-card-4 w3-animate-zoom" style="width:150px">
    <img src="uploads/{{$employee->image}}" alt="passport" style="width:100%"><br><br>
    <div class="w3-container w3-margin-4 w3-animate-zoom">
      <p><b>Mr {{$employee->name}}</b></p>
      <p>Manager</p>
    </div>
  </div>
</div>

                                                </td>
                                                <td>{{$employee->employeeId}}</td>
                                                <td>{{$employee->name}}</td>
                                                <td>{{$employee->email}}</td>
                                                <td>{{$employee->phonenumber}}</td>
                                                <td>{{$employee->created_at}}</td>
    <td>
          
        <form action="/pardonWorker" method="Post">
        @csrf
    <input type="hidden" name="id" value="{{$employee->id}}">
    <input type="hidden" name="email" value="{{$employee->email}}">
    
    <button class="btn btn-success " style = '' class='w3-text-green'>Charge & Restore</button>
</form>
  
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