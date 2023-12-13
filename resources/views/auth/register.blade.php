


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Webkit | Responsive Bootstrap 4 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css">
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-6 bg-primary content-left">
                              <div class="p-3">
                                 <h2 class="mb-2 text-white">Sign Up</h2>
                                 <p>Create your Webkit account.</p>
                                 <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                     @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                  
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="name" type="text" placeholder=" " value="{{old('name')}}">
                                            
                                             <label>First Name</label>
                                          </div>
                                          <span style="color:red">@error('name') {{$message}}@enderror
                                          </span>
                                         
                                       </div>
                                       
                                        <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="lastname" type="text" placeholder="" value= "{{old('lastname')}}">
                                             
                                            </span> 
                                             <label>Last Name</label>
                                          </div>
                                          <span style="color:red" >  @error('lastname')
                                             {{$message}}
                                             @enderror
                                       </div> 
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="email" type="email" placeholder=" " value="{{old('email')}}">
                                            
                                             
                                             <label>Email</label>
                                             
                                             

                                          </div>
                                          <span style="color:red">@error('email') {{$message}}@enderror
                                          </span>
                                         
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="phoneno" type="text" placeholder=" ">
                                             
                                             <label>Phone No.</label>
                                            
                                          </div>
                                          <span style="color:red" >  @error('phoneno')
                                             {{$message}}
                                             @enderror
                                         </span> 
                                       </div> 
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control"  name="password" type="password" placeholder=" ">
                                             
                                             <label>Password</label>
                                          </div>
                                          <span style="color:red">@error('password') {{$message}}@enderror
                                          </span>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="password_confirmation" type="password" placeholder=" ">
                                             
                                             <label>Repeat Password</label>
                                          </div>
                                          <span style="color:red">@error('password_confirmation') {{$message}}@enderror
                                          </span>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label text-white" for="customCheck1">I agree with the terms of use</label>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-white"></a> Sign Up</button>
                                    <p class="mt-3">
                                       Already have an Account <a href="{{route('login')}}" class="text-white text-underline">Sign In</a>
                                    </p>
                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-6 content-right">
                              <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
    
    <script src="../assets/vendor/moment.min.js"></script>
  </body>
</html>