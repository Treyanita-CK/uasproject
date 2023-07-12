<!DOCTYPE html>
<html lang="en">
<div class="header-middle p-0 bg-lightest xs-text-center">
      
<head>
  <meta charset="utf-9" />
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    WEBSITE TI UCIC
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="" rel="stylesheet" />
  <link rel="stylesheet" href="" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('template2/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('template2/assets/css/now-ui-kit.css?v=1.3.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('template2/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar " color-on-scroll="100">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
           
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">More About Us</a>
          <a class="dropdown-item" href="/mahasiswa">Mahasiswa</a>
          <a class="dropdown-item" href="/dosen">Dosen</a>
          <a class="dropdown-item" href="/alumni">Alumni</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="kegiatan">Kegiatan</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="prestasi">Prestasi</a>
          <div class="dropdown-divider"></div>
         
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          TI UCIC
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
          <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
         </button>
      </div>
            
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="template2/assets/img/cic.png">
        <ul class="navbar-nav">
        <li class="nav-item">
        
         
          <li class="nav-item">
          <a href="#C4" class="nav-link" title="Kontak">  <i class="now-ui-icons users_single-02"></i>Kontak</a></li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#C5"><i class="now-ui-icons business_badge"></i>Prospek Kerja</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#C3"><i class="now-ui-icons education_atom"></i>Tentang Himatif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#C2"> <i class="now-ui-icons education_hat"></i></i>Tentang TI</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/about "> <i class="now-ui-icons travel_info"></i>About</a>
          </li>
         
         

          
          <li class="nav-item mt-2">
          <form action="/mahasiswa/cari" method="GET">
          
          <input type="text" name="cari" placeholder="Cari mahasiswa .." value="{{ old('cari') }}" >
	      	<input type="submit" value="CARI">

          </li>		
	</form>
</li>  
      </div>
    </div>
  </nav>
  
  <!-- End Navbar -->
  
    <!-- About -->
    
    @yield('konten')
       
<!-- alamat-->
<footer class="footer footer-default">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href=""><i class="now-ui-icons location_pin"></i>
              Alamat :
              Jl. Kesambi No.202, Kesambi Kota Cirebon
             
              </a>
            </li>
            <li>
              <a href=""> </i> <i class="now-ui-icons tech_mobile"></i>
              Telephone :
              0231-200418
            
              </a>
            </li>
            <li>
              <a href=""><i class="now-ui-icons ui-1_email-85"></i>
                E-mail :
              info @ cic.ac.id
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
        
      </div>
    </footer>
  </div>
<div class="header-middle p-0 bg-dark xs-text-center">
  <div class="container pt-0 pb-0">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-5">
        <div class="widget no-border m-0">
          
        </div>
      </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('template2/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('template2/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('template2/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{asset('template2/assets/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('template2/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{asset('template2/assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('template2/assets/js/now-ui-kit.js?v=1.3.0')}}" type="text/javascript"></script>
</body>

</html>
