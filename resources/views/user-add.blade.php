
@extends('/layouts.main')
@section('main-container')


     <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-3 col-lg-4">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Add New User</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <form action="{{route('user-add')}}" method="POST">
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                           <div class="form-group">
                              <div class="crm-profile-img-edit position-relative">
                                 <img class="crm-profile-pic rounded avatar-100" src="../assets/images/user/11.png" alt="profile-pic">
                                 <div class="crm-p-image bg-primary">
                                    <i class="las la-pen upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*">
                                 </div>
                              </div>
                           <div class="img-extension mt-3">
                              <div class="d-inline-block align-items-center">
                                    <span>Only</span>
                                 <a href="javascript:void();">.jpg</a>
                                 <a href="javascript:void();">.png</a>
                                 <a href="javascript:void();">.jpeg</a>
                                 <span>allowed</span>
                              </div>
                           </div>
                           </div>
                           <div class="form-group">
                              <label>User Role:</label>
                              <select name="type" class="selectpicker form-control" data-style="py-0">
                                 <option>Select</option>
                                 <option>Web Designer</option>
                                 <option>Web Developer</option>
                                 <option>Tester</option>
                                 <option>Php Developer</option>
                                 <option>Ios Developer </option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="furl">Facebook Url:</label>
                              <input type="text" class="form-control" id="furl" placeholder="Facebook Url">
                           </div>
                           <div class="form-group">
                              <label for="turl">Twitter Url:</label>
                              <input type="text" class="form-control" id="turl" placeholder="Twitter Url">
                           </div>
                           <div class="form-group">
                              <label for="instaurl">Instagram Url:</label>
                              <input type="text" class="form-control" id="instaurl" placeholder="Instagram Url">
                           </div>
                           <div class="form-group">
                              <label for="lurl">Linkedin Url:</label>
                              <input type="text" class="form-control" id="lurl" placeholder="Linkedin Url">
                           </div>
                        </form>
                     </div>
                  </div>
            </div>
            <div class="col-xl-9 col-lg-8">  
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">New User Information</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           
                           <form  action="{{route('user-add')}}" method="POST">
                              @csrf
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="fname">First Name:</label>
                                    <input type="text" class="form-control" name="firstname" id="" placeholder="firstname" value="{{old('firstname')}}">
                              <span style="color:red" >  @error('firstname')
                                {{$message}}
                                @enderror
                            </span> 
                            

                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" class="form-control" name="lastname" id="" placeholder="Last Name" value="{{old('lastname')}}" >
                                   
                                    <span style="color:red" >  @error('lastname')
                                        {{$message}}
                                        @enderror
                                    </span> 
                                   
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="add1">Street Address 1:</label>
                                    <input type="text" name="streetaddress1" class="form-control" id="streetaddress1" placeholder="Street Address 1" value="{{old('streetaddress1')}}">
                                   
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="add2">Street Address 2:</label>
                                    <input type="text" name="streetaddress2" class="form-control" id="streetaddress2" placeholder="Street Address 2" value="{{old('streetaddress2')}}">
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label for="cname">Company Name:</label>
                                    <input type="text" name="companyname" class="form-control" id="companyname" placeholder="Company Name" value="{{old('companyname')}}">
                                 </div>
                                 <div class="form-group col-sm-12">
                                    <label>Country:</label>
                                    <select name="country" class="selectpicker form-control" data-style="py-0">
                                       <option>Select Country</option>
                                       <option>Caneda</option>
                                       <option>Noida</option>
                                       <option >USA</option>
                                       <option>India</option>
                                       <option>Africa</option>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="mobno">Mobile Number:</label>
                                    <input type="text"name="phoneno" class="form-control" id="mobilenumber" placeholder="Mobile Number" value="{{old('mobilenumber')}}">
                                    <span style="color:red" >  @error('phoneno')
                                        {{$message}}
                                        @enderror
                                    </span> 
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="altconno">Alternate Contact:</label>
                                    <input type="text"name="alternatecontact" class="form-control" id="altconno" placeholder="Alternate Contact" value="{{old('alternatecontact')}}">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" name= "email" class="form-control" id="" placeholder="Email" value="{{old('email')}}">
                                    <span style="color:red" >  @error('email')
                                        {{$message}}
                                        @enderror
                                    </span> 
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="pno">Pin Code:</label>
                                    <input type="text" name="pincode" class="form-control" id="pno" placeholder="Pin Code" value="{{old('pincode')}}">
                                    <span style="color:red" >  @error('pincode')
                                        {{$message}}
                                        @enderror
                                    </span> 
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label for="city">Town/City:</label>
                                    <input type="text" name="city" class="form-control" id="city" placeholder="Town/City" value="{{old('city')}}">
                                 </div>
                              </div>
                              <hr>
                              <h5 class="mb-3">Security</h5>
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="uname">User Name:</label>
                                    <input type="text" name="username" class="form-control" name="" id="uname" placeholder="User Name" value="{{old('username')}}">
                                    <span style="color:red" >  @error('username')
                                        {{$message}}
                                        @enderror
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="pass">Password:</label>
                                    <input type="password" name="password" class="form-control" id="pass" placeholder="Password" >
                                    <span style="color:red" >  @error('password')
                                        {{$message}}
                                        @enderror
                                    </span> 
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="rpass">Repeat Password:</label>
                                    <input type="password" name="repeatpassword" class="form-control" id="rpass" placeholder="Repeat Password ">
                                    <span style="color:red" >  @error('repeatpassword')
                                        {{$message}}
                                        @enderror
                                    </span> 
                                 </div>
                              </div>
                              <div class="checkbox">
                                 <label><input class="mr-2" type="checkbox">Enable Two-Factor-Authentication</label>
                              </div>
                              <button type="submit" class="btn btn-primary">Add New User</button>
                           </form>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->

    
@endsection
