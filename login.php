<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <script th:src="@{https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js}"></script>
    <link th:href="@{http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css}" rel="stylesheet"/> 	
    <script th:src="@{http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js}"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.login-content,
.login-content2 {
    padding         : 25px;
    position        : relative;
    display         : block;
    vertical-align  : middle;
    border          : 11px solid rgba(255, 255, 255, .25);
    -webkit-background-clip: padding-box;
    background-clip : padding-box;
    width           : 100%;
    max-width       : 420px;
    min-width       : 310px;
    height          : 400px;
    margin-right    : auto;
    margin-left     : auto;
    //color: #fefefe; 
    background-color: rgba(255, 255, 255, 1);
}

/*.login-content,
.login-content2 {
    border-radius: 7px;
    -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
    -o-border-radius: 7px;
}*/

/*.login-content2.close,
.login-content.close {
    display: none;
}

.login-content2.open,
.login-content.open {
    display: inline-block;
}

.login-content2 .btn.btn-block {
    width: 30%;
}

.login-content a,
.login-content2 a {
    color: #31B3E3;
}

.login-content a:hover,
.login-content2 a:hover {
    text-decoration: none;
    color: #23A0CE;
}      */
  </style>
  <body>

    <div class="container">
      <div class="login-content">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 20px;">Sign in</button>
      </form>
    </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
