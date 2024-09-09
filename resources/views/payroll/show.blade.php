  @extends('layouts.main')

@section('content')


  <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="fa fa-users"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Payroll</h2>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                           </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Employee List</h4>
                            


                            <table>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Employee Id</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                   
                                </tr>
                                    @foreach($show as $show)

                                   
                                <tr>
                                      <td>{{$loop->iteration}}</td>

                                    <td>                                      <div class="w3-dropdown-hover dropup"><img src="uploads/{{$show->image}}" style="width: 50px; height: 50px;" class="w3-circle" alt = "Passport" >
  <div class="w3-dropdown-content w3-card-4 w3-animate-zoom" style="width:150px">
    <img src="uploads/{{$show->image}}" alt="passport" style="width:100%"><br><br>
    <div class="w3-container w3-margin-4 w3-animate-zoom">
      <p><b>Mr {{$show->name}}</b></p>
      <p>Manager</p>
    </div>
  </div>
</div></td>
                                    <td>{{$show->employeeId}}</td>
                                    <td>{{$show->name}}</td>
                                    <td>
                                        @if($show->status == 1)
                                        <button class="pd-setting">Active</button>
                                        @elseif($show->status == 2)
                                        <button class="pd-setting w3-yellow">Suspended</button>
                                        @else
                                        <button class="pd-setting w3-red">Retired</button>
                                        @endif
                                    </td>
                                
                                </tr>
                                
                                @endforeach
                               
                            </table>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection