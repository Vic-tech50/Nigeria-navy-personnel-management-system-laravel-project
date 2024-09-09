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
												<i class="fa fa-bell"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Assignment</h2>
												
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

                    	<form action="/submit_assignment" method="Post" enctype="multipart/form-data">
															@csrf

                                                                <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                            <label for="title" class="w3-text-white">Title</label>
                        <input type="text" name="title" id="title" class="form-control w3-white w3-text-black" required >
                    </div>
                    </div>

                       <div class="col-lg-6 col-sm-12">
                      <div class="mb-3">
  <label for="formFileSm" class="w3-text-white">Pdf file</label>
  <input class="form-control form-control-lg" id="formFileSm" type="file" name="pdf" accept=".pdf">
</div>
                    </div>

                </div>


                    <label for="subject" class="w3-text-white">Any Other Note</label>
						<textarea id="spaces" class="form-control w3-border"  name="message"> </textarea><br>
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