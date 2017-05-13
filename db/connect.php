<?php
// Insert Credentials

$host="localhost";
$dbname="postgres";
$user="postgres";

// Connecting, selecting database
$dbconn = pg_connect("host=$host dbname=$dbname user=$user")
    or die('Could not connect: ' . pg_last_error());

$query = 'set search_path to sirima';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
?>