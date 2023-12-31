<?php
$username="root";
$password="";
$server="localhost";
$db='itechnebula';
$con=mysqli_connect($server,$username,$password,$db);

if($con){
    //echo "Connection successful";

?>

<script>
    // alert('connection successful');
</script>

<?php
} else {
    //echo "No connection";
    die("no connection " . mysqli_connect_error());
}

?>

