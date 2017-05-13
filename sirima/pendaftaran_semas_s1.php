
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://localhost/basdat/sirima/bootstrap/css/bootstrap.min.css" rel="stylesheet"/> 	
    <script src="https://localhost/basdat/sirima/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://localhost/basdat/sirima/datepicker.js"></script>
	<link rel="stylesheet" href="https://localhost/basdat/sirima/datepicker.css"/>
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
  <script>	
	$(document).ready(function(){
		$('#tanggal_lulus').datepicker();
	});
  </script>
    <div class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(0, 33, 71); margin-top: 50px;">
     <?php include "header.php"; ?>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"  style="margin-top: 40px;">
		  <ul class="nav nav-sidebar">
			<li class=""><a href="http://localhost/basdat/sirima/registration.php">Register</a></li>
            <li class="active"><a href="http://localhost/basdat/sirima/pendaftaran_ss1/pemilihan_jenjang_pendaftaran.php">Buat Pendaftaran<span class="sr-only">(current)</span></a></li>
            <li><a href="http://localhost/basdat/sirima/pemilihan_jenjang_riwayat.php">Rekap Pendaftaran</a></li>
			<li><a href="http://localhost/basdat/sirima/pemilihan_prodi_riwayat.php">Daftar Pelamar Diterima</a></li>
			<li><a href="http://localhost/basdat/sirima/lihat_riwayat_pendaftaran.php">Riwayat Pendaftaran</a></li>
            <li><a href="http://localhost/basdat/sirima/lihat_kartu_ujian.php">Kartu Ujian</a></li>
            <li><a href="http://localhost/basdat/sirima/lihat_seleksi.php" >Hasil Seleksi</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 60px;">
			<form action="pembayaran.php" method="post">
          <table border="1" class="table table-striped table-bordered">
            <tbody>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="asal_sekolah">Asal Sekolah</label>
                  </td>
                  <td><input style="width:100%;" type="text" name="asal_sekolah" required/></td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="jenis_sma">Jenis SMA</label>
                  </td>
                  <td>
                    <select name="jenis_sma" style="width:100%;" required>
                      <option value="">--select--</option>
                      <option value="ipa">IPA</option>
                      <option value="ips">IPS</option>
                      <option value="bahasa">Bahasa</option>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="alamat_sekolah">Alamat Sekolah</label>
                  </td>
                  <td><input style="width:100%;" type="text" name="alamat_sekolah" required /></td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="nisn">NISN</label>
                  </td>
                  <td>
                    <p style="font-size:12px; color:gray;">Maksimal 10 karakter berisi angka</p>
                    <input style="width:100%;" type="text" name="nisn" required />
                  </td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="tanggal_lulus">Tanggal Lulus</label>
                  </td>
                  <td>
                    <input style="width:100%;" type="text" id="tanggal_lulus" required>
                  </td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="nilai_uan">Nilai UAN</label>
                  </td>
                  <td>
                    <p style="font-size:12px; color:gray;">Hanya dalam bentuk angka (bisa decimal)</p>
                    <input style="width:100%;" type="text" name="nilai_uan" required />
                  </td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="prodi1">Prodi Pilihan 1</label>
                  </td>
                  <td>
                    <p style="font-size:12px; color:gray;">Prodi pilihan 1, 2, dan 3 tidak boleh sama</p>
                    <select name="prodi1" style="width:100%;">
                      <option value="">--select--</option>
                      <option value="">Ilmu Komputer</option>
                      <option value="">Kedokteran</option>
                      <option value="">Matematika</option>
                      <option value="">Teknik Sipil</option>
                    <?php
                      // $list=mysql_query("select nama from PROGRAM_STUDI where jenjang='S1' order by nama asc");
                      // while($row_list=mysql_fetch_assoc($list)){
                        ?>
                        <!-- <option value="<? //echo $row_list['nama']; ?>"> -->
                          <?//echo $row_list['nama'];?>
                        <!-- </option> -->
                      <? //} ?>
                    </select> 
                  </td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="prodi2">Prodi Pilihan 2</label>
                  </td>
                  <td>
                    <select name="prodi2" style="width:100%;">
                      <option value="">--select--</option>
                      <option value="">Ilmu Komputer</option>
                      <option value="">Kedokteran</option>
                      <option value="">Matematika</option>
                      <option value="">Teknik Sipil</option>
                    <?php
                      // $list=mysql_query("select nama from PROGRAM_STUDI where jenjang='S2' order by nama asc");
                      // while($row_list=mysql_fetch_assoc($list)){?>
                        <!-- <option value="<? //echo $row_list['nama']; ?>"> -->
                          <?//echo $row_list['nama'];?>
                        <!-- </option> -->
                      <? //} ?>
                    </select> 
                  </td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="prodi3">Prodi Pilihan 3</label>
                  </td>
                  <td>
                    <select name="prodi3" style="width:100%;">
                      <option value="">--select--</option>
                      <option value="">Ilmu Komputer</option>
                      <option value="">Kedokteran</option>
                      <option value="">Matematika</option>
                      <option value="">Teknik Sipil</option>
                    <?php
                      // $list=mysql_query("select nama from PROGRAM_STUDI where jenjang='S3' order by nama asc");
                      // while($row_list=mysql_fetch_assoc($list)){?>
                         <!-- <option value="<? //echo $row_list['nama']; ?>"> -->
                           <?//echo $row_list['nama'];?>
                        <!-- </option> -->
                      <? //} ?>
                    </select> 
                  </td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="kota">Lokasi Kota Ujian</label>
                  </td>
                  <td>
                    <select name="kota" style="width:100%;">
                    <option value="">--select--</option>
                    <option value="">Bogor</option>
                    <option value="">Depok</option>
                    <option value="">Jakarta</option>
                    <?php
                      // $list=mysql_query("select kota from LOKASI_UJIAN where jenjang='S1' order by kota asc");
                      // while($row_list=mysql_fetch_assoc($list)){?>
                        <!-- <option value="<? //echo $row_list['kota']; ?>"> -->
                          <?//echo $row_list['kota'];?>
                        <!-- </option> -->
                      <? //} ?>
                    </select> 
                  </td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label for="tempat">Lokasi Tempat Ujian</label>
                  </td>
                  <td>
                    <select name="tempat" style="width:100%;">
                    <option value="">--select--</option>
                    <option value="">Kampus A</option>
                    <option value="">Kampus B</option>
                    <option value="">Kampus C</option>
                    <?php
                      // $list=mysql_query("select tempat from LOKASI_UJIAN where jenjang='S1' order by tempat asc");
                      // while($row_list=mysql_fetch_assoc($list)){?>
                        <!-- <option value="<? //echo $row_list['tempat']; ?>"> -->
                          <?//echo $row_list['tempat'];?>
                        <!-- </option> -->
                      <? //} ?>
                    </select> 
                  </td>
              </tr>
            </tbody>
          </table>
          <input class="btn btn-primary" id="pendaftaran" type="submit" name="submit" value="Simpan">
        </form>
        </div>
      </div>
    </div>
  </body>

</html>
