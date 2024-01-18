
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Halaman Register</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- loader-->
  <link href="{{ asset('/') }}css/pace.min.css" rel="stylesheet"/>
  <script src="{{ asset('/') }}js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('/') }}images/darillspetox.png" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  {{-- <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet"/> --}}
  <!-- animate CSS-->
  <link href="{{ asset('/') }}css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('/') }}css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('/') }}css/app-style.css" rel="stylesheet"/>

  <link href="{{ asset('/') }}bs/css/bootstrap.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->
<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper" style="margin-top:100px;"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5" style="background-color:#0B0F19"> 
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{ asset('/') }}images/darillspetox.png" class="logo-icon" style="width:100px; height:100px;">
		 	</div>
		    <div class="card-title text-uppercase text-center py-3">Sign UP</div>
		    
                <form action="/regis/store" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                            <div class="form-group mb-3" >
                                <label for="email" class="sr-only">E-mail</label>
                                <div class="position-relative has-icon-right">
                                    <input autofocus autocomplete="off" type="email" id="email" name="email" class="form-control 
                                    @error('email')
                                        is-invalid
                                    @enderror
                                    " placeholder="Enter Email" style="background-color:rgb(26, 45, 60)">
                                    <div class="form-control-position" style="margin-right:10px">
                                        <i class="icon-envelope-open"></i>
                                    </div>
                                </div>
                                <div class="text-warning mb-3" style="margin-top:2px">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3" >
                                <label for="name" class="sr-only">Name</label>
                                <div class="position-relative has-icon-right">
                                    <input autofocus autocomplete="off" type="text" id="name" name="name" class="form-control 
                                    @error('name')
                                        is-invalid
                                    @enderror
                                    " placeholder="Enter Name" style="background-color:rgb(26, 45, 60)">
                                    <div class="form-control-position" style="margin-right:10px">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                </div>
                                <div class="text-warning mb-3" style="margin-top:2px">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3" >
                                <label for="username" class="sr-only">Username</label>
                                <div class="position-relative has-icon-right">
                                    <input autofocus autocomplete="off" type="text" id="username" name="username" class="form-control 
                                    @error('username')
                                        is-invalid
                                    @enderror
                                    " placeholder="Enter Username" style="background-color:rgb(26, 45, 60)">
                                    <div class="form-control-position" style="margin-right:10px">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                                <div class="text-warning mb-3" style="margin-top:2px">
                                    @error('username')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="sr-only">Password</label>
                                <div class="position-relative has-icon-right">
                                    <input autocomplete="off" type="password" id="Password" name="password" class="form-control
                                    @error('password')
                                        is-invalid
                                    @enderror
                                    " placeholder="Enter Password" autocomplete="off" style="background-color:rgb(26, 45, 60)">
                                    <div class="form-control-position" style="margin-right:10px">
                                        <i class="icon-lock "></i>
                                    </div>
                                </div>
                                <div class="text-warning mb-3" style="margin-top:2px">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="profile_image" class="sr-only">Profile Image</label>
                                <div class="position-relative has-icon-right">
                                    <input autocomplete="off" type="file" id="profile_image" name="profile_image" class="form-control
                                    @error('profile_image')
                                        is-invalid
                                    @enderror
                                    "placeholder="Upload Image Profile" accept="image/*" style="background-color:rgb(26, 45, 60)">

                                    <div class="form-control-position" style="margin-right:10px">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                </div>
                                <div class="text-warning mb-3" style="margin-top:2px">
                                    @error('profile_image')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                  

                        {{-- <div class="form-group mb-3" style="visibility:hidden">
                            <label for="level" class="sr-only">User Level</label>
                            <div class="position-relative has-icon-right"> --}}
                                <input autocomplete="off" type="level" id="level" name="level" class="form-control"
                                placeholder="Enter Password" autocomplete="off" value="2" style="visibility:hidden">
                                {{-- <div class="form-control-position" style="margin-right:10px">
                                    <i>Level</i>
                                </div>
                            </div>
                        </div>     --}}
                        
                    <button type="submit" value="submit" class="btn btn-light btn-block" style="width:100%; background-color:#3F4858">Sign Up</button>
                </form>

		    </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text mb-0">Already have an account? <a href="{{ url('/login') }}" style="text-decoration:none" class="text-warning"> Sign In here</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('/') }}js/jquery.min.js"></script>
  <script src="{{ asset('/') }}js/popper.min.js"></script>
  <script src="{{ asset('/') }}js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{ asset('/') }}js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="{{ asset('/') }}js/app-script.js"></script>

  <script src="{{ asset('/') }}bs/js/bootsrap.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>
