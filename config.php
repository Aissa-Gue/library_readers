<?php
//the line bellow used to ignore php errors
//error_reporting(E_ERROR | E_PARSE);

//**** Development db ****//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_readers_db";

$ROOT_DIR = "http://$_SERVER[HTTP_HOST]/library_readers";

$con = mysqli_connect($servername, $username, $password);
$db_selected = mysqli_select_db($con, $dbname);

if (!$db_selected) {
  $createDb = "CREATE DATABASE $dbname";
  mysqli_query($con, $createDb);
  include 'create_empty_db.php';
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
  echo 'Failed to connect to database' . mysqli_connect_error();
}

// current date
$date = date("Y-m-d");

//arabic lang chars
mysqli_set_charset($conn, 'utf8');

$ProjTitle = "المكتبة المركزية | برنامج المنخرطين";

//reset a_readers id
//$resetQuery="ALTER table a_readers auto_increment = 1";
//mysqli_query($conn,$resetQuery);

//disable validation of form by the browser (header + print.php)
header('Cache-Control: no cache');