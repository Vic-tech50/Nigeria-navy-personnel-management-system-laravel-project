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
                                                <i class="fa fa-history"></i>
                                            </div>
											<div class="breadcomb-ctn">
												<h2>History</h2>
											
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
      
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTab4" class="tab-review-design">
                                <li class="active"><a href="#leave">Leave</a></li>
                                <li><a href="#reviews"> Assignment</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="leave">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="demo-container">
                                                    <div class="card-wrapper"></div>
                                                        <section>
                                   
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">

                                             @if(isset($leave_info->employeeId) != null)
                                            <table>
                                                <tr style="border-bottom: 3px solid white;">
                                                    <th>Created_at</th>
                                                    <th>Title</th>
                                                    <th>Reason</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                </tr>

                                                <tr>
                                                    @foreach($leave as $leave)
                                                    <td>{{$leave->created_at}}</td>
                                                    <td>{{$leave->purpose}}</td>
                                                    <td>{{$leave->message}}</td>
                                                    <td>{{$leave->start_date}}</td>
                                                    <td>{{$leave->end_date}}</td>
                                                    <td>@if($leave->status == 1)
                                                        <p>Awaiting Approvaal</p>

                                                        @elseif($leave->status == 2)
                                                          <p class="w3-text-red">Cancelled</p>

                                                    @elseif($current == $leave->end_date)

                                                    <p class="w3-text-red">Cancelled</p>
                                                    @else
                                                   <i class="fa fa-undo fa-spin fa-lg w3-text-green" title="Active"></i>

                                                    @endif
                                                
                                                    </td>

                     
                                                  
                                                </tr>

       

                                     @endforeach
                                           
                                            </table>
                                            @else
                                            <h2 class="w3-text-white"><b>Table is Empty</b></h2>

                                            @endif
                                        </div>
                                    </div>
                                </section>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-3"></div>
                                                    <div class="col-lg-6">
                                                        <div class="devit-card-custom">
                                                        @if(isset($ass_info->employeeId) != null)
                                            <table>
                                                <tr style="border-bottom: 3px solid white;" class="w3-text-white">
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>PDF Project</th>
                                                    <th>Note</th>
                                                    <th>Status</th>
                                                    <th>Date Submitted</th>
                                                    
                                                </tr>

                                                <tr >
                                                    @foreach($ass as $ass)
                                                    <td class="w3-text-white">{{$loop->iteration}}</td>
                                                    <td class="w3-text-white">{{$ass->title}}</td>
                                                    <td class="w3-text-white">
                                                        @if(isset($ass->pdf))
                                                        <a href="uploads/{{$ass->pdf}}" target="_blank"><button class="btn btn-primary">Open Pdf</button></a> </td>
                                                        @else
                                                        <span class="w3-text-red">No Pdf</span>
                                                        @endif
                                                    <td class="w3-text-white">
                                                        @if($ass->caption != null)
                                                        {{$ass->caption}}
                                                    @else
                                                    <p>No Note</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($ass->status == 0)
                                                     <span class="w3-text-red">Checking ...</span>
                                                     @else
                                                      <span class="w3-text-green">Accepted</span>
                                                      @endif

                                                </td>
                                                    <td class="w3-text-white">{{$ass->created_at}}</td>
                                                    
                                                  
                                                </tr>

       

                                     @endforeach
                                           
                                            </table>
                                            @else
                                            <h2 class="w3-text-white"><b>Table is Empty</b></h2>

                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3"></div>
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
        </div>

        @endsection