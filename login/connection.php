<?php
#change if I use web server
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect");
}