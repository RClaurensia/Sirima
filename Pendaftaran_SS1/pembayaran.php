<html xmlns:th="http://www.thymeleaf.org">
    <head>
        <title>SIRIMA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <link href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet"/>   
      <script src="@{http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> 
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
        <h1 style="text-align: center;">Form Pembayaran</h1><br>
        <form action="pendaftaran_sukses.php" method="post" target="_self">
          <table border="1" class="table table-striped table-bordered">
            <tbody>
              <tr>
                  <td style="padding-right:10px;">
                    <label>Id Pendaftaran</label>
                  </td>
                  <td><input style="width:100%;" type="text" name="asal_sekolah"/></td>
              </tr>
              <tr>
                  <td style="padding-right:10px;">
                    <label>Biaya Pendaftaran</label>
                  </td>
                  <td><input style="width:100%;" type="text"/></td>
              </tr>
            </tbody>
          </table>
          <input class="btn btn-success" id="bayar" type="submit" name="submit" value="Bayar">
        </form>
    </div>
    </body>
</html>