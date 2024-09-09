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
												<i class="fa fa-paper-plane-o"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Take A Leave</h2>
												
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


        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">

                    	<form action="/take_a_leave" method="Post">
															@csrf


                    


						<div class="form-group">
                            <label for="subject" class="w3-text-white">Purpose</label>
                        <input type="text" name="purpose" id="purpose" class="form-control w3-white w3-text-black" >
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                            <label for="subject" class="w3-text-white">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control w3-white w3-text-black" >
                    </div>
                    </div>

                       <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                            <label for="subject" class="w3-text-white">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control w3-white w3-text-black" >
                    </div>
                    </div>

                </div>

                    <label for="subject" class="w3-text-white">Comment</label>
						<textarea id="spaces" class="form-control w3-border"  name="message" placeholder="Let Us Know More About Your leave"> </textarea><br>
														<center>


                    <button class="btn btn-primary text-center" style="width: 150px; height: 50px">Submit</button>

                </center>
														</form>	
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

 <script>
        tinymce.init({
            selector: '#spaces',
            // Additional configuration options if needed
        });
    </script>

        @endsection