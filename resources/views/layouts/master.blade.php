<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Arima Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
  <!-- Include CKEditor from CDN -->
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>


  <style>
    textarea.form-control {
      max-width: 100%;
      max-height: none !important;
      padding: 10px 10px 0 0;
      resize: none;
      border: none;
      border-bottom: 1px solid #E3E3E3;
      border-radius: 0;
      line-height: 2;
    }
  </style>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="indigo">
      <div class="logo">
        <a href="/" class="simple-text">
          <img src="{{asset('assets/img/logo.png')}}" style="max-width:150px;width:130px;" />
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ preg_match('/information/',Route::current()->uri) == true ? 'active' : '' }}">
            <a href="/information">
              <i class="now-ui-icons design_app"></i>
              <p>Information</p>
            </a>
          </li>
          <li class="{{ preg_match('/slider/',Route::current()->uri) == true ? 'active' : '' }}">
            <a href="/slider">
              <i class="now-ui-icons design_image"></i>
              <p>Slider</p>
            </a>
          </li>
          <li class="{{ preg_match('/pestManagement/',Route::current()->uri) == true ? 'active' : '' }}">
            <a href="/pestManagement">
              <i class="now-ui-icons design_image"></i>
              <p>Pest Management Quality</p>
            </a>
          </li>
          <li class="{{ preg_match('/contact/',Route::current()->uri) == true ? 'active' : '' }}">
            <a href="/contact">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Contact Form</p>
            </a>
          </li>
          <li class="{{ preg_match('/user/',Route::current()->uri) == true ? 'active' : '' }}">
            <a href="/user">
              <i class="now-ui-icons users_single-02"></i>
              <p>User List</p>
            </a>
          </li>
          <li class="px-4 pt-3" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse">
            <p style="font-weight:bold;color:white">SERVICE SOLUTION</p>
            <hr style="margin-top:0px;border-top: 3px solid #fff;">
          </li>
          <div
            class="collapse {{ preg_match('/commercial|residential|factory|disinfection/', Route::current()->uri) ? 'show' : '' }}"
            id="dashboard-collapse">
            <li class="{{ preg_match('/commercial/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/commercial">
                <i class="now-ui-icons business_money-coins"></i>
                <p>Commercial</p>
              </a>
            </li>
            <li class="{{ preg_match('/residential/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/residential">
                <i class="now-ui-icons business_bank"></i>
                <p>Residential</p>
              </a>
            </li>
            <li class="{{ preg_match('/factory/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/factory">
                <i class="now-ui-icons shopping_box"></i>
                <p>Factory</p>
              </a>
            </li>
            <li class="{{ preg_match('/disinfection/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/disinfection">
                <i class="now-ui-icons ui-2_settings-90"></i>
                <p>Disinfection</p>
              </a>
            </li>
            <li class="{{ preg_match('/cleaning/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/cleaning">
                <i class="now-ui-icons ui-2_settings-90"></i>
                <p>Cleaning</p>
              </a>
            </li>
          </div>
          <li class="px-4 pt-3" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse2">
            <p style="font-weight:bold;color:white">METHOD
            </p>
            <hr style="margin-top:0px;border-top: 3px solid #fff;">
          </li>
          <div
            class="collapse {{ preg_match('/general_pest|termite_baiting|fumigation/', Route::current()->uri) ? 'show' : '' }}"
            id="dashboard-collapse2">
            <li class="{{ preg_match('/general_pest/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/general_pest">
                <i class="now-ui-icons loader_gear"></i>
                <p>General Pest</p>
              </a>
            </li>
            <li class="{{ preg_match('/termite_baiting/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/termite_baiting">
                <i class="now-ui-icons objects_globe"></i>
                <p>Termite Baiting</p>
              </a>
            </li>
            <li class="{{ preg_match('/fumigation/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/fumigation">
                <i class="now-ui-icons shopping_basket"></i>
                <p>Fumigation</p>
              </a>
            </li>
          </div>
          <li class="px-4 pt-3" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse3">
            <p style="font-weight:bold;color:white">
              PEST
            </p>
            <hr style="margin-top:0px;border-top: 3px solid #fff;">
          </li>
          <div class="collapse {{ preg_match('/pest|bugs|other/', Route::current()->uri) ? 'show' : '' }}"
            id="dashboard-collapse3">
            <li class="{{ preg_match('/pest/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/pest">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Content Pest</p>
              </a>
            </li>
            <li class="{{ preg_match('/bug/',Route::current()->uri) == true ? 'active' : '' }}">
              <a href="/bug">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Bugs</p>
              </a>
            </li>
          </div>
          <li class="{{ preg_match('/news/',Route::current()->uri) == true ? 'active' : '' }}">
            <a href="/news">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>News</p>
            </a>
          </li>
          <li class="active">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit"
                style="background: none; border: none; cursor: pointer;margin: 10px 15px 0;color: #FFFFFF;text-transform: uppercase;font-size: 0.7142em;">
                <i class="now-ui-icons media-1_button-power"></i>
                <p>Logout</p>
              </button>
            </form>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute"
        style="background: linear-gradient(to right, #252525 0%, #1a1919 60%, #0f0f0f 100%);">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">
              @yield('breadcrumb')
            </a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      @yield('content')

      <footer class="footer">
        <div class=" container-fluid ">
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Website by <a href="https://1017studios.com/index.html" target="_blank">1017studios</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>


  @yield('jquery')
  <!--   Core JS Files   -->

  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets/demo/demo.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>