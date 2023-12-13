
@extends('/layouts.main')
@section('main-container')


     <div class="content-page">
      <div class="container-fluid">
         <div class="row">
           
            <div class="col-xl-9 col-lg-8">  
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Profile Update</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           
                           <form  action="{{route('update.profile')}}" method="POST">
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
                                    <label for="mobno">Mobile Number:</label>
                                    <input type="text"name="phoneno" class="form-control" id="mobilenumber" placeholder="Mobile Number" value="{{old('mobilenumber')}}">
                                    <span style="color:red" >  @error('phoneno')
                                        {{$message}}
                                        @enderror
                                    </span> 
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
                                    <label for="pass">Password:</label>
                                    <input type="password" name="password" class="form-control" id="pass" placeholder="Password" >
                                    <span style="color:red" >  @error('password')
                                        {{$message}}
                                        @enderror
                                    </span> 
                                 </div>
                                 
                              </div>
                             
                              <div>
                                <button type="submit" class="btn btn-primary">Update</button>
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
    <!-- Wrapper End-->

    
@endsection
