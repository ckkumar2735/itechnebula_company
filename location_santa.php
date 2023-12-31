<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$server_name = "localhost";
$username = "root";
$password = "";
$db = "itechnebula";
$conn = new mysqli($server_name, $username, $password, $db);
if ($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
} else {
//   echo "connected sucessfully";
}


if (isset($_POST['submit'])) {
  $city = addslashes($_POST['city']);
  $_SESSION['city'] = $city;
//   echo "City: $city<br>";


  header("location:emoji.php");
}

?>
