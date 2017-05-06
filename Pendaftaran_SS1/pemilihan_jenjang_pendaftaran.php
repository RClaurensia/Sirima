<html xmlns:th="http://www.thymeleaf.org">
    <head>
        <title>SIRIMA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<script th:src="@{https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js}"></script>
        <link th:href="@{http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css}" rel="stylesheet"/> 	
        <script th:src="@{http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js}"></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <h1 style="text-align: center;">Form Pemilihan Jenjang Untuk Pendaftaran</h1><br>
          <form style="width:100%; text-align: center;" action="pendaftaran_semas_s1.php" method="post" target="_self">
          Jenjang :
          <select name="jenjang" style="width:10%;">
          <?php
            // mysql_connect ("localhost","root","");
            // mysql_select_db ("sirima");
            // $list=mysql_query("select * from jenjang order by nama asc");
            // while($row_list=mysql_fetch_assoc($list)){
              ?>
                <!-- <option value="<? echo $row_list['nama']; ?>"> -->
                  <?
                  // echo $row_list['nama'];
                  ?>
                <!-- </option> -->
            <? 
          // } 
          ?>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
          </select> 
          <br><br>
          <input class="btn btn-success" id="jenjang-submit" type="submit" name="submit" value="Pilih">
        </form>
    </div>
    </body>
</html>