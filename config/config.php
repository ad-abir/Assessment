<?php
// error_reporting(0);

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "web";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection Failed: " . mysqli_connect_error());
}
