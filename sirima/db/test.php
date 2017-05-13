<?php 
require('connect.php');
include('function.php');


session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Email or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['email'];
$password=$_POST['password'];

// SQL query to fetch information of registerd users and finds user match.
$query = pg_exec($dbconn, "select * from akun where password='$password' AND username='$username'");
$rows = pg_numrows($query);

echo $rows;

if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}