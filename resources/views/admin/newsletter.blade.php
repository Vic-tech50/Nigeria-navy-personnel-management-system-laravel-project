@extends('layouts.main')

@section('content')

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
                                            <li><span class="bread-blod">Send Email</span>
                                            </li>
                                        </ul>
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
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="review-content-section">

                    	<form action="/newsletter" method="Post">
															@csrf

                        <div class="form-group">
                            <label for="subject" class="w3-text-white">Email</label>
                        <select type="text" name="email" id="subject" class="form-control w3-white w3-text-black" placeholder="Subject">
                            <option value="All Users">To Everyone</option>
                            @foreach($email as $email)
                            
                            <option value="{{$email->email}} {{$email->name}}">{{$email->email}}</option>
                            @endforeach
                        </select>
                    </div>


                    


						<div class="form-group">
                            <label for="subject" class="w3-text-white">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control w3-white w3-text-black" placeholder="Subject"  style="">
                    </div>

                    <label for="subject" class="w3-text-white">Message</label>
						<textarea id="spaces" class="form-control w3-border"  name="message"> </textarea><br>
														<center>


                    <button class="btn btn-primary text-center" style="width: 150px; height: 50px">Drop Message</button>

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