<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dream Perpustakaan</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_purple-skins.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="home" class="logo">
            <b>Dream Perpustakaan</b>
        </a>
        
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
           
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="hidden-xs">
                        <a>
                            <i class="fa fa-clock-o"></i> <span id="jamweke">11:18:35</span>
                            <script type="text/javascript">
                                <!--
                                function startTime() {
                                    var today=new Date(),
                                        curr_hour=today.getHours(),
                                        curr_min=today.getMinutes(),
                                        curr_sec=today.getSeconds();
                                 curr_hour=checkTime(curr_hour);
                                    curr_min=checkTime(curr_min);
                                    curr_sec=checkTime(curr_sec);
                                    document.getElementById('jamweke').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
                                }
                                function checkTime(i) {
                                    if (i<10) {
                                        i="0" + i;
                                    }
                                    return i;
                                }
                                setInterval(startTime, 500);
                                //-->
                            </script>
                        </a>
                    </li>
                    <li class="">
                        <a href="bukus" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Daftar Buku</a>
                    </li>
                    <li class="">
                        <a href="peminjams" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Peminjam Buku</a>
                    </li>
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="https://cdn3.iconfinder.com/data/icons/black-easy/512/538642-user_512x512.png"
                                 class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="https://cdn3.iconfinder.com/data/icons/black-easy/512/538642-user_512x512.png"
                                     class="img-circle" alt="User Image"/>
                                <p>
                                    {!! Auth::user()->name !!}
                                    <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <header class="w3-container w3-red w3-center" style="padding:128px 16px">
        <h1 class="w3-margin w3-jumbo">Dream Libraries</h1>
        <p class="w3-xlarge">selamat datang disini.</p>
        <a href="mahasiswas" class><button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">cek apakah anda mahasiswa?</button>
      </header>
    </a>
    </header>

     
    <!-- Content Header (Page header) -->   

    <body>
  <content>
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16"></span>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="https://www.thedataschool.co.uk/wp-content/uploads/2015/12/seo-51-512.png" alt="John" style="width:67%">
        <div class="w3-container">
          <h3>Chart</h3>
          <p class="w3-opacity">menampilkan data pengunjung</p>
          <p>aded soon.</p>
          <p><a href="chart" class><button class="w3-button w3-light-grey w3-block">tampilkan</button></p></a>
        </div>
      </div>
    </div>

    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="http://www.kingsweston.bristol.sch.uk/_files/images/2016-2017/1EC0DEED8BA7F604E8D118ADA2E72AFA.png " alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Data Pengunjung</h3>
          <p>Data lah untuk setiap peminjam buku yang meminjamkan buku</p>
          <p><a href="peminjams" class><button class="w3-button w3-light-grey w3-block">tampilkan</button></p></a>
        </div>
      </div>
    </div>
  </div>
    
  </content>
    </body> 
      <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
          <h1 class="w3-margin w3-xlarge">Quote of the day: live is life</h1>
      </div>
    
    
        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2018 <a href="https://www.facebook.com/fakhri.ahnafdhia" target="_blank">Fakhri Ahnaf </a>.</strong> All rights reserved.
        </footer>
        
    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>
    
    @yield('scripts')

</html>
    

