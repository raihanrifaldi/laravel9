<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>SPERCO</title>
  <!-- loader-->
  <link href="{{ asset('/') }}css/pace.min.css" rel="stylesheet"/>
  <script src="{{ asset('/') }}js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('/') }}images/darillspetox.png" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{ asset('/') }}plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ asset('/') }}plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('/') }}css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('/') }}css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('/') }}css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('/') }}css/app-style.css" rel="stylesheet"/>

  <!-- table -->
  <!-- css table -->
  <link href="{{ url('/') }}https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

  <link href="{{ url('/') }}https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

   <!-- Bootstrap core JavaScript-->
   <script src="{{ url('/') }}https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- Page level plugin JavaScript-->
   <script src="{{ url('/') }}https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
   
   <script src="{{ url('/') }}https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
 
   <script src="{{ url('/') }}https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   



  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   @include('layout.side')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top"  style="background-color:rgba(0, 0, 0, 0.9)">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>

  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item" style="margin-top:9px">
      <p>{{ $user->name }}</p>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="{{ asset('storage/'.$user->profile_image) }}" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('storage/'.$user->profile_image) }}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">{{ $user->username }}</h6>
            <p class="user-subtitle">{{ $user->email }}</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="zmdi zmdi-account-box" style="margin-right:10px"></i> <a href="{{ url('/layout/akun') }}"> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item" ><i class="icon-power mr-2"></i> <a href="{{ url('/logout') }}"> Logout</a></li>
        <li class="dropdown-divider"></li>
      </ul>
    </li>
  </ul>
</nav>


</header>
<!--End topbar header-->

<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
    <div class="overlay toggle-menu"></div>
    <!--Start Dashboard Content-->
    <section class="content">
        @yield('isi_content')
    </section>
	
    <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	{{-- <footer class="footer" style="position: fixed; background-color:rgba(0, 0, 0, 0.667)">  
      <div class="container">
        <div class="text-center">
          Copyright © 2023 |
          SPETOX Web App |
          Template by Dashtreme Admin

        </div>
      </div>
    </footer> --}}

    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2023 |
          SPERCO Web App |
          Template by Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   {{-- <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-invert-colors"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div> --}}
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script type="text/javascript">
    $(function(){
      $(document).on('click', '#delete', function(e){
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
      })
    });
  </script>


  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('/') }}js/jquery.min.js"></script>
  <script src="{{ asset('/') }}js/popper.min.js"></script>
  <script src="{{ asset('/') }}js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="{{ asset('/') }}plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('/') }}js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="{{ asset('/') }}js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('/') }}js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="{{ asset('/') }}plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="{{ asset('/') }}js/index.js"></script>

  <script>
    $(document).ready(function() {
      $('#datable').DataTable({
        "order": [
          [3, 'asc']
        ]
      });

    });
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('/') }}https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{ url('/') }}https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  
  <script src="{{ url('/') }}https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

  <script src="{{ url('/') }}https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- LANGUAGES -->
  <script src="{{ asset('/') }}languages.js"></script>

  <!-- SCRIPT -->
  <script src="{{ asset('/') }}script.js"></script>

  {{-- v2 --}}
  <script src="{{ asset('/') }}v2apps.js"></script>
  
</body>
</html>