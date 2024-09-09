@extends('layouts.user_main')

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
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Personnel Details</h2>
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


                                                <form action="/update_user_profile" method = "post" >
                                                  @csrf

                                                         <input type="hidden" value="{{Auth::user()->id}}" class="form-control"  name = "id" />

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
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Full Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" style = "color: white" name = "fullname"  value="{{Auth::user()->name}}" required/>
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
                                                                <input type="email" class="form-control" style = "color: white"   name ="email" value="{{Auth::user()->email}}" required/>
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
                                                                <input type="tel" class="form-control" style = "color: white" name = "phonenumber" value="{{Auth::user()->phonenumber}}" required/>
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
                                                                <input type="date" class="form-control" style = "color: white" name ="dateofbirth" value="{{Auth::user()->dateofbirth}}" required/>
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
                                                                    <select class="form-control custom-select-value" value="{{Auth::user()->marital}}" style ="color: white" name="marital" required>
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
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Hobbies</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="tel" class="form-control" style = "color: white" name = "hobby"  value="{{Auth::user()->hobby}}" required/>
                                                                        @error('hobby')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                           

                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">State Of Origin</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="state" placeholder="Enugu" style = "color: white" value="{{Auth::user()->state}}" required />
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
                                                                <input type="text" class="form-control" name="address" style = "color: white" value="{{Auth::user()->address}}"/>
                                                                        @error('address')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                 
                                                      <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Qualification</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="qualification" readonly style = "color: white; background: grey;" value="{{Auth::user()->qualification}}"/>
                                                                        @error('qualification')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
                                                            </div>
                                                        </div>
                                                    </div>


                                                         <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Area Of Study</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" readonly name="study" style = "color: white; background: grey;" value="{{ Auth::user()->study }}"/>
                                                                        @error('study')
<p class="text-danger mt-1 mb-1">{{ $message }}</p>
@enderror
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
                                                                        <button class="btn btn-lg btn-success " type="submit">Update Data</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                  
                                                 
                                                </div></div>
                                            </form>

                                                </div>
                                                 <br><br>
                                                 <form action="/admin_pass" method="post" >
                                                    @csrf

                                                    <div class="form-group-inner input-with-success">
                                                        <div class="row">

                                                            

                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      
                                                                <h3 class ="" style = "color:white"><b>Security</b></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 40px;" class="w3-card-4">

                                                         <input type="hidden" value="{{Auth::user()->id}}" class="form-control"  name = "id" />

                                                  <div class="form-group-inner text-light">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">New Password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="password" class="form-control" style = "color: white" name = "password" />
   
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro" style = "color: white">Confirm Password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="password" class="form-control" style = "color: white" name = "password_confirmation" />
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
                                                                        <button class="btn btn-lg btn-success " type="submit">Update Data</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div><br><br>
                                                  

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
