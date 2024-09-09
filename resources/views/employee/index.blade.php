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
                                            <li><span class="bread-blod">Personnel Details</span>
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
                                <div class="container">
                                <div class="row ">
                                    <div class="col-sm-12 col-lg-2">
                                         <i class="fa fa-circle fa-lg w3-text-green" ></i> :  <span class="w3-text-white"><b>First Draft</b></span>
                                    </div>

                                     <div class="col-sm-12 col-lg-2">
                                         <i class="fa fa-circle fa-lg w3-text-yellow" ></i> :  <span class="w3-text-white"><b>Second Draft</b></span>
                                    </div>

                                     <div class="col-sm-12 col-lg-2">
                                         <i class="fa fa-circle fa-lg w3-text-purple" ></i> :  <span class="w3-text-white"><b>Third Draft</b></span>
                                    </div>

                                     <div class="col-sm-12 col-lg-2">
                                         <i class="fa fa-circle fa-lg w3-text-red" ></i> :  <span class="w3-text-white"><b>Mother Based Draft Expired</b></span>
                                    </div>

                                     <div class="col-sm-12 col-lg-2">
                                         <i class="fa fa-refresh fa-spin fa-lg w3-text-white" ></i> :  <span class="w3-text-white"><b>Active</b></span>
                                    </div>


                                </div>
                            </div><br><br>
                                <div class="main-sparkline8-hd">
                                    <h1 class="w3-text-white">Personnel Details</h1>
                                    {{$mess}}
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list w3-responsive ">
                                    <table class="w3-table w3-bordered w3-hoverable w3-text-white" id="tab" style="">
                                        <thead>
                                                  
                                            <tr class="w3-text-red">
                                                <th>#</th>
                                                <th>Passport</th>
                                                <th>Status</th>
                                                <th>Ship</th>
                                                <th>Service Number</th>
                                                <th>Current Rate</th>
                                                <th>Fullname</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                             
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
      <p><b>@if($employee->gender == 'male')Mr @else Mrs/Miss @endif{{$employee->name}}</b></p>
      <p>{{$employee->position}}</p>
    </div>
  </div>
</div>

                                                </td>



                                                <td style="">@if($current >= $employee->retired_at && $employee->status_poa == 1 || $employee->status_poa == 0 )
                                                   <i class="fa fa-circle fa-lg w3-text-green" ></i>
                                                    @elseif($current >= $employee->retired_at && $employee->status_poa == 2 )
                                                       <i class="fa fa-circle fa-lg w3-text-yellow" ></i>


                                                

                                                    @elseif($current >= $employee->retired_at && $employee->status_poa == 3 )
                                                   <i class="fa fa-circle fa-lg w3-text-purple" ></i>

                                                    @elseif($employee->status_poa > 3 )
                                                  <i class="fa fa-circle fa-lg w3-text-red" ></i>

                                                   @else
                                                     <i class="fa fa-refresh fa-spin fa-lg w3-text-white" title="Running"></i>
                                                    @endif
                                                </td>
                                                <td style="text-transform: uppercase;">{{$employee->place_of_assignment}}</td>
                                                <td>{{$employee->employeeId}}</td>
                                                <td>
                                                    @if($current >= $employee->rank_retired_at )
                                                   <span class="text-danger" style="text-transform: uppercase;"> {{$employee->position}}</span>
                                                   @else
                                                   <span style="text-transform: uppercase;"> {{$employee->position}}</span>
                                                   @endif
                                                </td>
                                                <td style="text-transform: capitalize;">{{$employee->name}}</td>
                                                <td>{{$employee->email}}</td>
                                                <td>{{$employee->phonenumber}}</td>
                                              
    <td>
          <div class = "row">
                    <div class = "col-lg-4">
    <a href="{{ route('employee.edit', $employee->id) }}"> <button class="btn btn-primary " style = '' class='w3-text-green'><i class = "fa fa-eye" ></i> View</button> </a>
    </div>
                    <div class = "col-lg-4">

  <form action="{{ route('employee.destroy',$employee->id) }}" method="Post">
@csrf
@method('DELETE')
<button class="btn btn w3-text-red" style = ''  data-confirm-delete="true"><i class = "fa fa-trash"></i> Delete</button>
</form>
</div>

                   <div class = "col-lg-4">

  <form action="/refresh" method="Post">
@csrf
<input type="hidden" name="id" value="{{$employee->id}}">
<button class="btn btn w3-text-red" style = ''  data-confirm-delete="true"><i class = "fa fa-refresh"></i> Refresh</button>
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