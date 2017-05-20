
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
  height : 100px;
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
li > .active{
background-color: red !important;
}
footer{
	display: block;
	color: rgb(0, 33, 71);
}
.custom-nav{
  background-color: rgb(0, 33, 71) ! important; 
  height: 150px; 
  position: relative; 
  top: 0px; 
  margin-top: -50px;
}
	</style>
  </head>

  <body>
	<div class="containers">
    <div class="navbar navbar-inverse navbar-fixed-top custom-nav">
      <div class="container-fluid">
		<!-- Logo -->
		 <table style="width:100%">
			  <tr>
				<td width="60px;">
					<img src="http://localhost/basdat/sirima/logo.png" height="150" width="150">
				</td>
				<td>
					&nbsp;	
				</td>
				<td >
					<label style="font: bolder 20px courier; color:white;">Penerimaan Mahasiswa Baru</label><BR>
					
				</td>
				<td width="300px;">
				</td>
				<td>
					<BR><BR><BR><BR>
					<a href="" style="color: #ffffff; font-size: 15px;">HOME</a>
				</td>
				<td>
					<BR><BR><BR><BR>
					<a href="" style="color: #ffffff; font-size: 15px;">GUIDE</a>
				</td>
				<td>
					<BR><BR><BR><BR>
					<a href="https://localhost/basdat/sirima/registration.php" style="color: #ffffff; font-size: 15px;">REGISTRATION</a>
				</td>
				<td>
					<BR><BR><BR><BR>
					<a href="https://localhost/basdat/sirima/login.php" style="color: #ffffff; font-size: 15px;">LOGIN</a>
				</td>
				
			  </tr>
		</table> 
       
      </div>
	  </div>
	  <div class="body" style="margin-top:-20px;">
		<!--<img src="http://localhost/basdat/sirima/home.jpg" height="30%" width="100%">-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item active">
				  <img src="http://localhost/basdat/sirima/home.jpg" alt="Los Angeles">
				</div>

				<div class="item">
				  <img src="http://localhost/basdat/sirima/home.jpg" alt="Chicago">
				</div>

				<div class="item">
				  <img src="http://localhost/basdat/sirima/home.jpg" alt="New York">
				</div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			
			<div class="content" style="padding: 50px;">
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
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>
</html>
