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
                        <a href="visitors" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Pengunjung</a>
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
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
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
      
      <!-- First Grid -->
      <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
          <div class="w3-twothird">
            <h1>Perpustakaan</h1>
            <h5 class="w3-padding-32">perpustakaan adalah sebuah koleksi buku dan majalah. Walaupun dapat diartikan sebagai koleksi pribadi perseorangan, namun perpustakaan lebih umum dikenal sebagai sebuah koleksi besar yang dibiayai dan dioperasikan oleh sebuah kota atau institusi, serta dimanfaatkan oleh masyarakat yang rata-rata tidak mampu membeli sekian banyak buku atas biaya sendiri.

                Tetapi, dengan koleksi dan penemuan media baru selain buku untuk menyimpan informasi, banyak perpustakaan kini juga merupakan tempat penyimpanan dan/atau akses ke map, cetak atau hasil seni lainnya, mikrofilm, mikrofiche, tape audio, CD, LP, tape video dan DVD. Selain itu, perpustakaan juga menyediakan fasilitas umum untuk mengakses gudang data CD-ROM dan internet.
                
                Perpustakaan dapat juga diartikan sebagai kumpulan informasi yang bersifat ilmu pengetahuan, hiburan, rekreasi, dan ibadah yang merupakan kebutuhan hakiki manusia.
                
                Oleh karena itu perpustakaan modern telah didefinisikan kembali sebagai tempat untuk mengakses informasi dalam format apa pun, apakah informasi itu disimpan dalam gedung perpustakaan tersebut ataupun tidak. Dalam perpustakaan modern ini selain kumpulan buku tercetak, sebagian buku dan koleksinya ada dalam perpustakaan digital (dalam bentuk data yang bisa diakses lewat jaringan komputer)..</p>
          </div>
      
          <div class="w3-third w3-center">
            <i class="fa fa-book w3-padding w3-text-red"></i>
          </div>
        </div>
      </div>
      
      <!-- Second Grid -->
      <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">
          <div class="w3-third w3-center">
            <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
          </div>
      
          <div class="w3-twothird">
            <h1>coffe-break</h1>
            <h3 class="w3-padding-32">rehat-istirahat-santai.</h3>
      
            <p class="w3-text-grey">Istilah untuk istirahat singkat selama 10 hingga 20 menit di hari kerja, di suatu acara pertemuan, atau perkumpulan, yang merupakan waktu umum untuk menikmati secangkir kopi, atau teh, atau makanan keci.
                Tradisi ini juga dapat disebut sebagai istirahat minum teh, atau Afternoon Tea. Coffee Break juga berfungsi sebagai waktu untuk bersosialisasi dan istirahat,.</p>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
          <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
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
</body>
</html>
    

