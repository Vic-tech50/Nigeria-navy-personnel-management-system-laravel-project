@extends('layouts.user_main')

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
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Personnel Dashboard</h2>
                                               
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
    
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <marquee class=" w3-large w3-text-blue" style="font-weight: 900">{{$notice->message}}</marquee>
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="personal-info-wrap">
                            <div class="widget-head-info-box">
                                
                                <img src="uploads/{{Auth::user()->image}}" width="70" height="70" class="img-circle circle-border m-b-md" alt="profile"><br><br>
                                <div class="persoanl-widget-hd">
                                    <h2>{{Auth::user()->name}}</h2>
                                    <p>{{Auth::user()->employeeId}}</p>
                                    <h4 style="text-transform: uppercase; " class="text-success">{{Auth::user()->position}}</h4>
                                </div>
                             
                            </div><br><br>
                          <div class="container">
                              <!--   <div class="row ">
                                    <div class="col-sm-12 col-lg-3">
                                         <i class="fa fa-circle fa-lg w3-text-green" ></i> :  <span class="w3-text-white"><b>First Posting</b></span>
                                    </div>

                                     <div class="col-sm-12 col-lg-3">
                                         <i class="fa fa-circle fa-lg w3-text-yellow" ></i> :  <span class="w3-text-white"><b>Second Posting</b></span>
                                    </div>

                                     <div class="col-sm-12 col-lg-3">
                                         <i class="fa fa-circle fa-lg w3-text-purple" ></i> :  <span class="w3-text-white"><b>Third Posting</b></span>
                                    </div>

                                     <div class="col-sm-12 col-lg-3">
                                         <i class="fa fa-circle fa-lg w3-text-red" ></i> :  <span class="w3-text-white"><b>Mother Based Posting Expired</b></span>
                                    </div>
                                </div> -->
                            </div><br><br>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                            <h3 class="box-title">Assignment Completed</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">{{$ass}}</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Total Leave</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">{{$leave}}</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Present Unit</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    @if($current >= Auth::user()->retired_at && Auth::user()->status_poa == 1 || Auth::user()->status_poa == 0 )
                                                   <i class="fa fa-circle fa-lg w3-text-green" style="font-size: 40px;" title="Active"></i>
                                                    @elseif($current >= Auth::user()->retired_at && Auth::user()->status_poa == 2 )
                                                       <i class="fa fa-circle fa-lg w3-text-yellow" style="font-size: 40px;" title="Active"></i>


                                                

                                                    @elseif($current >= Auth::user()->retired_at && Auth::user()->status_poa == 3 )
                                                   <i class="fa fa-circle fa-lg w3-text-purple" style="font-size: 40px;" title="Active"></i>

                                                    @elseif(Auth::user()->status_poa > 3 )
                                                  <i class="fa fa-circle fa-lg w3-text-red" style="font-size: 40px;" title="Active"></i>

                                                   @else
                                                     <i class="fa fa-refresh fa-spin fa-lg w3-text-white" style="font-size: 40px;" title="Running"></i>
                                                    @endif
                                   
                                </li>
                                <li class="text-right"><i class="" aria-hidden="true"></i> <span class="">{{Auth::user()->place_of_assignment}}</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Duration</h3>
                            <ul class="list-inline two-part-sp">
                                
                                <li class="text-right"><span class="text-success">FROM: </span><span class="">{{Auth::user()->updated_at}}</span></li>
                                <li class="text-right"><span class="text-danger">TO: </span> <span class="">{{Auth::user()->retired_at}}</span></li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
     
@endsection
