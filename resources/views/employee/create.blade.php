@extends('layouts.main')

@section('content')


<br><br>
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
                                                <h2>Add Employee Details</h2>
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

 <!-- Basic Form Start -->
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">

                    
               
              
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <!-- <h1 class= "text-light" style = "color: white; "><b>Add Employee</b></h1> -->
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">


                                                <form action="{{ route('employee.store') }}" method = "post" enctype="multipart/form-data">
                                                  @csrf

                                                    <div class="form-group-inner input-with-success">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      
                                                                <h3 class ="" style = "color:white; "><b>Personal Details</b></h3>
                                                            </div>
                                                        </div>
                                                    </div>
 <div style="padding: 40px;" class="w3-card-4">

        <div class="form-group-inner text-light">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Add Passport</label>
                                                            </div>
                                                             <div class="col-lg-6">
                    <div class="" style = "padding:none;margin: 0;">
<center>

    <img type="file" src = "{{ asset('img/put-pix.png') }}" id = "im" class = "w3-circle" style = " width: 100px; height: 100px;" alt = "profile photo" class="w3-card-6" ><br><br> 

    <input type="file" id="fileid" style="text-align: center;" class=""  onchange="loadImageFileAsURL();" name = "image" accept="image/*" required/> <br><br>
</center>
</div>
                                               
                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group-inner text-light">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Full Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" style = "color: white" name = "fullname" placeholder="Nonso Gbenga Musa" value="{{ old('fullname') }}" />
                                                                        @error('fullname')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                  

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="email" class="form-control" style = "color: white" placeholder="...@gmail.com"  name ="email" value="{{ old('email') }}"/>
                                                                        @error('email')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Phone Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="tel" class="form-control" style = "color: white" name = "phonenumber" placeholder="090546716..." value="{{ old('phonenumber') }}" />
                                                                        @error('phonenumber')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                    <div class="form-group-inner input-with-light">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Date of Birth</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" class="form-control" style = "color: white" name ="dateofbirth" value="{{ old('dateofbirth') }}" />
                                                                        @error('dateofbirth')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                            <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style ="color: white">Marital Status</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" value="{{ old('marital') }}" style ="color: white" name="marital">
                                                <option value ="Single">Single</option>
                                                <option value ="Engaged">Engaged</option>
                            <option value ="Married">Married</option>
                                            
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                               
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                      
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white"><span class="basic-ds-n">Gender</span></label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                <div class="bt-df-checkbox">
                                                                      <div class = "row">
                                                                                <div class = "col-lg-4">
                                                                      <label style = "color: white">
                                                                    <input class="pull-left radio-checked" type="radio" checked="" value="male" id="optionsRadios1" name="gender">  <i></i> Male</label>
                                                                    </div>

                                                                      <div class = "col-lg-4">
                                                                    <label style = "color: white">
                                                                    <input class="pull-left" type="radio" value="female" id="optionsRadios1" name="gender">  <i></i> Female</label> 
                                                                    </div>        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Hobbies</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="tel" class="form-control" style = "color: white" name = "hobby" placeholder="dancing, reading,..." value="{{ old('hobby') }}" />
                                                                        @error('hobby')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                                  <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style ="color: white">Country</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" value="{{ old('country') }}" style ="color: white" name="country">
                                                   <option value="No Country Choosen">Choose Country</option>
                                                                
   <option value="Afganistan">Nigeria</option>
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
   <option value="Nigeria">Afghanistan</option>
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
                                                        </div>
                                                    </div>

                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">State Of Origin</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="state" placeholder="Enugu" style = "color: white" value="{{ old('state') }}"/>
                                                                        @error('state')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>


                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Address</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="address" style = "color: white" placeholder="64, Wazobia Street ..." value="{{ old('address') }}"/>
                                                                        @error('address')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style ="color: white">Educational Qualification</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" value="{{ old('qualification') }}" style ="color: white" name="qualification">
                                                <option value ="SSCE">SSCE</option>
                                                <option value ="NCE">NCE</option>
                            <option value ="OND">OND</option>
                                            <option value ="HND">HND</option>
                                                <option value ="BSC">BSC</option>
                                                <option value ="PHD">PHD</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                         <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Department</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="study" style = "color: white" placeholder="Computer Science" value="{{ old('study') }}"/>
                                                                        @error('study')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>


                  
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style ="color: white">Unit/Ship</label>
                                                            </div>
                                                           
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="poa" placeholder="Unit" style = "color: white" value="{{ old('poa') }}"/>
                                                                        @error('poa')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                           
                                                        </div>
                                                    </div>

                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style ="color: white">Duration</label>
                                                            </div>
                                                           
                                                            <div class="col-lg-5 col-md-5 col-sm-9 col-xs-12">
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

                                                          <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                 <input type="text" name="duration" placeholder="Duration" class="form-control w3-black" value="{{old('duration')}}" >
                                                           
                                                        </div>
                                                    </div>

                                                </div></div>
                                                </div>
                                                 <br><br>
                                                    <div class="form-group-inner input-with-success">
                                                        <div class="row">

                                                            

                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      
                                                                <h3 class ="" style = "color:white"><b>Family Details</b></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 40px;" class="w3-card-4">
                                                  <div class="form-group-inner text-light">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Parent/Guidance Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" style = "color: white" name = "parentname" placeholder = "Mr and Mrs Robert ..." value="{{ old('parentname') }}"/>
                                                                        @error('parentname')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Phone Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="tel" class="form-control" style = "color: white" placeholder="07063728..." value="{{ old('parentnumber') }}" name = "parentnumber" />
                                                                        @error('parentnumber')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Family Residence</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="familyaddress" placeholder="70 Araromi Street" style = "color: white" value="{{ old('familyaddress') }}"/>
                                                                        @error('familyaddress')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div><br><br>
                                                   <div class="form-group-inner input-with-success">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      
                                                                <h3 class ="" style = "color:white">Next of Kins Details</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 40px;" class="w3-card-4">
                                                   <div class="form-group-inner text-light">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Next of kins Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" style = "color: white" placeholder="Mr Igwe ..." name = "nokname" value="{{ old('nokname') }}"/>
                                                                        @error('nokname')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Phone Number</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="tel" class="form-control" style = "color: white" placeholder="08063728..." name = "noknumber" value="{{ old('noknumber') }}"/>
                                                                        @error('noknumber')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Relationship</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="relationship" style = "color: white" placeholder = "father" value="{{ old('relationship') }}"/>
                                                                        @error('relationship')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Address of Next of kin</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="nokaddress" placeholder="Wazobia Street..." style = "color: white" value="{{ old('nokaddress') }}"/>
                                                                        @error('nokaddress')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left">
                                                                        <!-- <button class="btn btn-white" type="submit">Cancel</button>     -->
                                                                        <button class="btn btn-lg btn-success " type="submit">Save Employee Data</button>
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
        <!-- Basic Form End-->




            <script type="text/javascript">
    function loadImageFileAsURL() 
  { 
   var filesSelected = document.getElementById("fileid").files; 
   if (filesSelected.length > 0) 
   { 
    var fileToLoad = filesSelected[0]; 
 
    var fileReader = new FileReader(); 
 
    fileReader.onload = function(fileLoadedEvent) 
    { 
     im.src  = fileLoadedEvent.target.result; 
    }; 
 
    fileReader.readAsDataURL(fileToLoad); 
   } 
  } 
</script>

        @endsection