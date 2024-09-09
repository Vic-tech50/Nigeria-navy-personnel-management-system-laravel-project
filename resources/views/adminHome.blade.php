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
												<i class="fa fa-tachometer"></i>
											</div>
											<div class="breadcomb-ctn">
												<h1 class="w3-text-white">Admin Dashboard</h1>
												
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Personnel</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label text-green"><i class="fa fa-circle w3-text-green"  aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$employee}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>AWOL/Desertion</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label "><i class="fa fa-circle w3-text-red" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$sacked_employee}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Retired Personnel</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label"><i class="fa fa-circle w3-text-blue" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">0</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Task</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label"> <i class="fa fa-circle w3-text-purple" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$ass}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 100%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
     
   <!--     
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="calender-inner">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->
@endsection