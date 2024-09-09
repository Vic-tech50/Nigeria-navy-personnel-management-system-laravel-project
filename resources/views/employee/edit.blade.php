@extends('layouts.main')

@section('content')

<br><br><br>

      <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                                  
											<div class="breadcomb-icon">
												<!-- <i class="icon nalika-home"></i> -->
											</div>
											<div class="breadcomb-ctn">
												<h2>View Personnel Details</h2>
												<!-- <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p> -->
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<!-- <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button> -->
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
  <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-t-0 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
				<div class="single-product-pr">
							<div class="row">
								<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
									<div id="myTabContent1" class="tab-content w3-card-8">
										<div class="product-tab-list tab-pane fade active in" id="single-tab1">
											<img src="{{ asset('uploads/'.$employee->image) }}" alt="" style="" class="w3-round-large" />
											<div class="w3-container w3-center" style="height: 70px;
											margin-top: 30px;">
    <h3 class="w3-text-white"><b>{{$employee->name}} | {{$employee->employeeId}}</b></h3>
    <h4 class="w3-text-white" style="text-transform: uppercase;"> {{$employee->position}}</h4>
  </div>
										</div>
										
									</div>
										<h3></h3>
									<br>
									<ul id="single-product-tab">
										<div class="row">
											<div class="col-sm-12 col-lg-3 ">
										<li class="active">
											<a href="#promote"><button class="btn  btn-success" style="width: 100px; height: 50px;">Advance </button></a>
										</li>
									</div>

									<!-- <div class="col-sm-12 col-lg-3"> -->
	<!-- 				<div class="w3-dropdown-hover">
  <button class="btn w3-red" style="width: 100px; height: 50px;">Fire!</button>
  <div class="w3-dropdown-content w3-border w3-animate-zoom w3-black w3-text-white" style="width: 30px">

  	<form action="/sackWorker" method="Post">
		@csrf
	<input type="hidden" name="id" value="{{$employee->id}}">
	<input type="hidden" name="email" value="{{$employee->email}}">
	<!- <input type="submit" name="" value="Direct Fire"> --
    <button class="btn dropdown-item" style="width: 100%; background: transparent;">Direct Fire</button>
</form>
    <a href="#fire">Fire with Letter</a>
    
  </div>
</div> -->

	
									<!-- </div> -->

	

									<div class="col-lg-3 col-sm-12">
										<li>
											<a href="#poa"><button class="btn  btn-warning" style="width: 100px; height: 50px">Draft</button></a>
										</li>
									</div>
									<div class="col-lg-3 col-sm-12">
										<li>
											<a href="#edit"><button class="btn  btn-primary" style="width: 100px; height: 50px">Edit </button></a>
										</li>
									</div>

									<div class="col-lg-3 col-sm-12">
										<li>
											<a href="#img"><button class="btn  btn-primary" style="width: 150px; height: 50px">Change Image </button></a>
										</li>
									</div>



								</div>

								<div class="row">
									
									</ul>
								</div>
								<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
									<div class="single-product-details res-pro-tb">
									
										
										<div class="row">
											<div class="col-lg-6 col-sm-12">
										<div class="single-pro-price">
											<span class="single-regular" style="border-bottom: 2px solid red;">Personal Details</span><span class="single-old"></span>
										</div>
										<div class="" style="">
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Full name: </span> @if($employee->gender == 'male')Mr {{$employee->name}} @else Mrs{{$employee->name}} @endif</h6>

											<h6 class="w3-text-white"><span class="w3-text-red"  style="font-weight: bold;">Email: </span>{{$employee->email}}</h6>

											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Contact Address: </span>{{$employee->address}}</h6>

											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Contact Number: </span>{{$employee->phonenumber}}</h6>

											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Date of Birth: </span>{{$employee->dateofbirth}}</h6>
											
										</div>
									</div>

									<div class="col-lg-6">
											<div class="single-pro-price">
											<span class="single-regular" style="border-bottom: 2px solid red;"></span><span class="single-old"></span>
										</div>
										<div class="w3-text-light">
											
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Marital Status: </span>{{$employee->marital_status}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Qualification: </span>{{$employee->qualification}} {{$employee->study}}</h6>

											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Nationality: </span>{{$employee->country}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">State Of Origin: </span>{{$employee->state}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Hobbies: </span>{{$employee->hobby}}</h6>
											
											
										</div>
									</div>
								</div>

								<div class="row">

									<div class="col-lg-6">
											<div class="single-pro-price">
											<span class="single-regular" style="border-bottom: 2px solid red;">Next of Kin Details</span><span class="single-old"></span>
										</div>
										<div class="w3-text-light">
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Parent/Guidance: </span>{{$employee->nokname}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Home Address: </span>{{$employee->nokaddress}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Contact Number: </span>{{$employee->noknumber}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Relationship: </span>{{$employee->relationship}}</h6>
											
											
										</div>
									</div>

										<div class="col-lg-6">
											<div class="single-pro-price">
											<span class="single-regular" style="border-bottom: 2px solid red;">Family Details</span><span class="single-old"></span>
										</div>
										<div class="w3-text-light">
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Parent/Guidance: </span>{{$employee->parentname}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Home Address: </span>{{$employee->familyaddress}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Contact Number: </span>{{$employee->parentnumber}}</h6>
											
											
										</div>
									</div>

									<div class="col-lg-6">
											<div class="single-pro-price">
											<span class="single-regular" style="border-bottom: 2px solid red;">Service Details</span><span class="single-old"></span>
										</div>
										<div class="w3-text-light">
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Place Of Assignment: </span>{{$employee->place_of_assignment}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Start on: </span>{{ \Carbon\Carbon::parse($employee->updated_at)->format('D, F jS, Y h:i:s A') }}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Expired On: </span>{{ \Carbon\Carbon::parse($employee->retired_at)->format('D, F jS, Y h:i:s A') }}</h6>
											
											
										</div>
									</div>


										<div class="col-lg-6">
											<div class="single-pro-price">
											<span class="single-regular" style="border-bottom: 2px solid red;">Promotion Details</span><span class="single-old"></span>
										</div>
										<div class="w3-text-light">
											<h6 class="w3-text-white" style="text-transform: uppercase;"><span class="w3-text-red" style="font-weight: bold;">Current Rank: </span>{{$employee->position}}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Start on: </span>{{ \Carbon\Carbon::parse($employee->start_time)->format('D, F jS, Y h:i:s A') }}</h6>
											<h6 class="w3-text-white"><span class="w3-text-red" style="font-weight: bold;">Expired On: </span>{{ \Carbon\Carbon::parse($employee->rank_retired_at)->format('D, F jS, Y h:i:s A') }}</h6>
											
											
										</div>
									</div>

								</div>


									</div>
										<br>
									<!-- 	<div class="single-pro-cn">
											<h1 class="w3-text-white"><b>Salary - &#8358;{{$employee->salary}}.00</b></h1>
									
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!-- Single pro tab End-->
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<div class="single-tb-pr">
                    		<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<ul id="myTab" class="tab-review-design">
										<li class="active"><a href="#promote">Advance</a></li>
										<li><a href="#edit"><span></span> Edit Personnel <span></span></a></li>
										<li><a href="#fire">AWOL/Deserter</a></li> 
										<!-- <li><a href="#poa">Place Of Assignment</a></li> -->
									</ul>
									<div id="myTabContent" class="tab-content">
										<div class="product-tab-list product-details-ect tab-pane fade active in" id="promote">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">
														<form action="/promoteWorker" method="Post">
															@csrf
															<input type="hidden" name="id" value="{{$employee->id}}">
															<div class="row">
																<div class="col-lg-3 col-sm-12">
																	<div class="">
																		<label class="w3-text-white w3-large">Advance From</label>
																		<input type="text" name="oldposition" class="form-control w3-black" value="{{$employee->position}}" readonly>
																	</div>
																	
																</div>
																<div class="col-lg-3 col-sm-12">
																<div class="">
																	<label class="w3-text-white w3-large">Promote To</label>
																		 <select name="newposition" class="form-control">
															
													             @foreach($payroll as $payroll)
												<option value ="{{$payroll->position}}">{{$payroll->position}}</option>
							
                                                @endforeach
														</select>
																	</div>

															
																	
																</div>

																			<div class="col-lg-3 col-sm-12">
																<div class="">
																	<label class="w3-text-white w3-large">Time</label>
																		 <select name="time" class="form-control">
																		 	 <option value = 'Seconds'>Seconds</option>
																<option value = 'Minutes'>Minutes</option>
																<option value = 'Hours'>Hours</option>
																<option value = 'Days'>Days</option>
																<option value = 'Weeks'>Weeks</option>
																<option value = 'Months'>Month</option>
																<option value = 'Year'>Year</option>
													            
												
							
                                            
														</select>
																	</div>
																	
																</div>

																<div class="col-lg-3 col-sm-12">
																	<div class="">
																		<label class="w3-text-white w3-large">Duration</label>
																		<input type="text" name="duration" class="form-control w3-black" value="{{old('duration')}}" >
																	</div>
																	
																</div>


															</div>
															<br>
															<div class="text-center ">
																<button class="btn">Update</button>
																
															</div>

														</form>
													</div>
												</div>
											</div>
										</div>
							<div class="product-tab-list tab-pane fade" id="edit">
								<form action="{{ route('employee.update',$employee->id) }}" method="Post">
									@csrf
                                    	@method('PUT')
										     <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="FullName" value="{{$employee->name}}" name="fullname" required>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Email" value="{{$employee->email}}" name="email" required >
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Phone Number" value="{{$employee->phonenumber}}" name="phonenumber" required>
                                                    </div>
                                                     <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-star" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Study" value="{{$employee->study}}" name="study" required>
                                                    </div>
                                                   
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" placeholder="Date of Birth" value="{{$employee->dateofbirth}}" name="dateofbirth" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">

                                                   <select  class="form-control pro-edt-select form-control-primary" name="marital_status" >

															 <!-- <option value ="{{$employee->marital_status}}">{{$employee->marital_status}}</option> -->
															 <option value ="Single">Single</option>
                                                			<option value ="Engaged">Engaged</option>
                            								<option value ="Married">Married</option>
														</select><br>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-book" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Qualification" value="{{$employee->qualification}}" name="qualification" required>
                                                    </div>
                                                      <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Address" value="{{$employee->address}}" name="address" required>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="State" value="{{$employee->state}}" name="state" required>
                                                    </div>

                                                    <select class="form-control pro-edt-select form-control-primary" name="country">
															                <option value="{{$employee->country}}">{{$employee->country}}</option>
                                                                
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>

														</select>
                                                </div>
                                            </div>

                                      
                                            <!-- <input type="submit" name="" value="submit"> -->

                                           
                                        </div>
                                         <div class="text-center ">
																<button class="btn">Update</button>
																
															</div>
										</div>
										</form>

		<!-- 								    <style>
        .editor {
            width: 100%;
            height: 300px;
            border: 1px solid #ccc;
        }
    </style> -->
										<div class="product-tab-list tab-pane fade" id="fire">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">

														<form action="/letter" method="Post">
															@csrf
															<input type="hidden" name="id" value="{{$employee->id}}">
	<input type="hidden" name="email" value="{{$employee->email}}">
															
														<textarea id="space" name="letter"></textarea><br>

														<center><button class="btn btn-primary text-center" style="width: 150px; height: 50px">Submit</button></center>
														</form>			
<!-- <div id="toolbar">						
    <button onclick="execCommand('bold')"><strong>B</strong></button>
    <button onclick="execCommand('italic')"><em>I</em></button>
    <button onclick="execCommand('underline')"><u>U</u></button>
    <button onclick="execCommand('insertOrderedList')">1.</button>
    <button onclick="execCommand('insertUnorderedList')">&#8226;</button>
</div>

<div contenteditable="true" id="editor" class="editor"></div>

<script>
    function execCommand(command, value = null) {
        document.execCommand(command, false, value);
    }
</script>
			 -->										</div>
												</div>
											</div>
										</div>

										<div class="product-tab-list  tab-pane fade " id="poa">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">
														<form action="/poa" method="Post">
															@csrf
															<input type="hidden" name="id" value="{{$employee->id}}">
															<input type="hidden" name="email" value="{{$employee->email}}">
															<div class="row">
																<div class="col-lg-4 col-sm-12">
																	<div class="">
																		<label class="w3-text-white w3-large">Draft To</label>
																		<input type="text" name="poa" class="form-control w3-black" value="{{old('poa')}}" >
																	</div>
																	
																</div>
																<div class="col-lg-4 col-sm-12">
																<div class="">
																	<label class="w3-text-white w3-large">Time</label>
																		 <select name="time" class="form-control">
																		 	 <option value = 'Seconds'>Seconds</option>
																<option value = 'Minutes'>Minutes</option>
																<option value = 'Hours'>Hours</option>
																<option value = 'Days'>Days</option>
																<option value = 'Weeks'>Weeks</option>
																<option value = 'Months'>Month</option>
																<option value = 'Year'>Year</option>
													            
												
							
                                            
														</select>
																	</div>
																	
																</div>

																<div class="col-lg-4 col-sm-12">
																	<div class="">
																		<label class="w3-text-white w3-large">Duration</label>
																		<input type="text" name="duration" class="form-control w3-black" value="{{old('duration')}}" >
																	</div>
																	
																</div>




															</div>
															<br>
															<div class="text-center ">
																<button class="btn">Update</button>
																
															</div>

														</form>
													</div>
												</div>
											</div>
										</div>



										<div class="product-tab-list  tab-pane fade " id="img">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="review-content-section">
														<form action="/change_image" method="Post" enctype="multipart/form-data">
															@csrf
															<input type="hidden" name="id" value="{{$employee->id}}">
															<!-- <input type="hidden" name="email" value="{{$employee->email}}"> -->
															<div class="row">
																<div class="col-lg-4 col-sm-12">
																	<div class="">
																		<label class="w3-text-white w3-large">Image</label>
																		<input type="file" name="image" class="form-control w3-black" accept="image/*" >
																	</div>
																	
																</div>
																




															</div>
															<br>
															<div class="text-center ">
																<button class="btn">Update Image</button>
																
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
            </div>
        </div>
 <script>
        tinymce.init({
            selector: '#space',
            // Additional configuration options if needed
        });
    </script>
       
        @endsection

