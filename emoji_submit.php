<?php

session_start();
$server_name = "localhost";
$username = "root";
$password = "";
$db = "itechnebula";
$conn = new mysqli($server_name, $username, $password, $db);
if ($conn->connect_error) {
  die("connection failed" . $conn->connect_error);
} else {
  echo "connected sucessfully";
}

if (isset($_POST['submit2'])) {
  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $phone = addslashes($_POST['phone']);

  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['phone'] = $phone;

  // $city=$_SESSION['city'];

  // echo "City: $city<br>";
  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Phone: $phone<br>";

  header("location:thanku.php");
}

?>