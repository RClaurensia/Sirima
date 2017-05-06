<html xmlns:th="http://www.thymeleaf.org">
    <head>
      <title>SIRIMA</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <link href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet"/> 	
      <script src="@{http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> 
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
    <div th:replace="fragment/header :: header">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Home</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Membuat Pendaftaran</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top:60px;">
        <h1 style="text-align: center;">Form Pendaftaran Semas Sarjana</h1>
        <div>
          <script>
            $( function() {
              $( "#tanggal_lulus" ).datepicker();
          } );
          </script>
          <?php
            // $jenjang = $_POST['jenjang'];
            mysql_connect ("localhost","root","");
            mysql_select_db ("sirima");
          ?>
          <br>
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
                    <select name="prodi1" style="width:100%;" required>
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
                    <select name="kota" style="width:100%;" required>
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
                    <select name="tempat" style="width:100%;" required>
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
          <input class="btn btn-success" id="pendaftaran" type="submit" name="submit" value="Simpan">
        </form>
        </div>
    	
    </div>
    </body>
</html>