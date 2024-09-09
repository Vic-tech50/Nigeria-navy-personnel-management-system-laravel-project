@extends('layouts.main')

@section('content')

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
        

 <!-- Basic Form Start -->
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
                        <div class="sparkline10-list mt-b-30">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1 style = "color: white">Add Payroll</h1>
                                </div>
                            </div><br>
                            <div class="sparkline10-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="basic-login-inner inline-basic-form">
                                                <form action="{{ route('payroll.store') }}" method = "post">
                                                   @csrf
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control basic-ele-mg-b-10 responsive-mg-b-10 w3-text-white" placeholder="Position" name = "position" value = "{{old('position') }}" />
                                                                                                                                   @error('position')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <input type="text" class="form-control basic-ele-mg-b-10 responsive-mg-b-10 w3-text-white" placeholder="Salary" value = "{{old('salary') }}" name = "salary"  />
                                                                                                                                 @error('salary')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                      <!-- <input type = "submit" value = "submit"> -->
                                                                <div class="login-btn-inner">

                                        
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <button class="btn btn-lg btn-primary"  type="submit">Add Payroll</button>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
               
            </div>
        </div>


        
        
        <div class="product-cart-area mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <h3 class="w3-text-white">Payroll list</h3>
                                <section>
                                   
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">
                                            <table>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Position Title</th>
                                                    <th>Salary</th>
                                                    <th>Actions</th>
                                                </tr>

                                                <tr>
                                                    @foreach($payroll as $payroll)
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$payroll->position}}</td>
                                                    <td>&#8358;{{$payroll->salary}}</td>
                                                     <td>
                                                        <div class = "row">
                    <div class = "col-lg-2">
                                                        <button title="Edit" class="pd-setting-ed w3-green"  data-toggle="modal" data-target="#edit{{ $payroll->id }}"><i class="fa fa-pencil" aria-hidden="true" ></i> Edit</button>
</div>

                    <div class = "col-lg-2">
                                                          <form action="{{ route('payroll.destroy',$payroll->id) }}" method="Post">
@csrf
@method('DELETE')
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed w3-red"><i class="fa fa-trash-o" aria-hidden="true"></i> Trash</button>

</form>
</div>

           <div class = "col-lg-2">
                                                          <form action="/showPayroll" method="Post">
@csrf

<input type="hidden" name="position" value="{{$payroll->position}}">
                                                        <button data-toggle="tooltip" title="See More" class="pd-setting-ed w3-blue"><i class="fa fa-eye" aria-hidden="true"></i> View</button>

</form>
</div>
</div>
                                                    </td>
                                                  
                                                </tr>

       

    <!-- Modal -->
    <div class="modal fade" id="edit{{ $payroll->id }}" tabindex="-1" role="dialog" aria-labelledby="edit{{ $payroll->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit{{ $payroll->id }}">Edit Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Edit form -->
                    <form method="POST" action="{{ route('payroll.update', ['payroll' => $payroll->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
    <label for="position">Email address</label>
    <input type="text" class="form-control w3-white" id="position" aria-describedby="emailHelp" name="position"  value="{{$payroll->position}}">
    
  </div>
  <div class="form-group">
    <label for="salary">Password</label>
    <input type="text" class="form-control w3-white" id="salary" name="salary" value="{{$payroll->salary}}" >
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                                @endforeach
                                           
                                            </table>
                                        </div>
                                    </div>
                                </section>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

 


@endsection