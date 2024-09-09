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
                                            <li><span class="bread-blod">Send Notice </span>
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


        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">

                    	<form action="/mess" method="Post" enctype="multipart/form-data">
															@csrf
														


						<textarea id="spaces" class="form-control w3-border"  name="message"> {{$getMessage->message}}</textarea><br>
														<center>


                    <button class="btn  btn-primary text-center" style="padding: 20px">Drop Message</button>

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