
<?php
session_start();
if(empty($_SESSION['username'])){
header("Location: login.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet"/> 	
    <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css"></script>
  </head>
<style>
/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
.custom-nav{
  background-color: rgb(0, 33, 71) ! important; 
  height: 150px; 
  position: relative; 
  top: 0px; 
  margin-top: -50px;
}

.fixedTop {
  top: 0;
  margin: 0 !important;
}
</style>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" style="background-color:rgb(0, 33, 71);height:100px;">
      <div class="container-fluid">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="http://localhost/basdat/sirima/logo.png" height="100" width="100">
		  <label style="font: bolder 20px courier; color:white;">Penerimaan Mahasiswa Baru</label>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
		    <li><a href="#" style="color: #ffffff; font-size: 14px;"><?php echo $_SESSION['username'] ?></a></li>
            <li><a href="#" style="color: #ffffff; font-size: 14px;">SETTINGS</a></li>
            <li><a href="#" style="color: #ffffff; font-size: 14px;">HELP</a></li>
			<li><a href="logout.php" style="color: #ffffff; font-size: 14px;">LOGOUT</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div> 
	  
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"  style="margin-top: 40px;">
          <ul class="nav nav-sidebar">
			<li class=""><a href="http://localhost/basdat/sirima/registration.php">Register</a></li>
            <li class=""><a href="http://localhost/basdat/sirima/pendaftaran_ss1/pemilihan_jenjang_pendaftaran.php">Buat Pendaftaran<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Riwayat Pendaftaran</a></li>
            <li><a href="#">Kartu Ujian</a></li>
            <li><a href="#">Hasil Seleksi</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 60px;">
			<div class="col-lg-6">
					<h3>Selamat Datang di Website Pendaftaran Universitas Inovasi 2017.</h3>
					<p>Seleksi Penerimaan Mahasiswa Baru  Universitas Inovasi Tahun 2017  dilaksanakan melalui 3 jalur, yaitu:</p>
					<ul class="list-group">
						<li class="list-group-item">1. Jalur Non Reguler</li>
						<li class="list-group-item">2. Jalur Reguler</li>
						<li class="list-group-item">3. Jalur Program Pasca Sarjana</li>
					</ul>
				</div>

				<div class="col-lg-6">
					<h4>Berikut Merupakan Tahapan Dalam Melakukan Pendaftaran Online Yang Harus di Lewati Peserta Pendaftaran:</h4><br/>
					<ul class="list-group">
						<li class="list-group-item">1. Registrasi dan melengkapi formulir pendaftaran.</li>
						<li class="list-group-item">2. Mendapatkan kode pembayaran.</li>
						<li class="list-group-item">3. Membayar biaya pendaftaran di Bank BNI.</li>
						<li class="list-group-item">4. Melakukan konfirmasi pembayaran.</li>
						<li class="list-group-item">5. Mendapatkan nomor peserta dan nomor ruang ujian.</li>
						<li class="list-group-item">6. Mengikuti ujian tulis (khusus jalur reguler) dan wawancara.</li>
						<li class="list-group-item">7. Pengumuman kelulusan.</li>
						<li class="list-group-item">8. Daftar ulang bagi calon mahasiswa yang lulus.</li>
					</ul>
				</div>
        </div>
      </div>
    </div>
  </body>
  <script>
	var $nav = $("nav"),


	$(window).scroll(function() {
	  if($(this).scrollTop() > 150) {
		 $nav.addClass('fixedTop');
	  } else {
		 $nav.removeClass('fixedTop');
	  }

	})
  </script>
</html>
