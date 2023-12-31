<?php
include('Mobile_Detect.php');
include('BrowserDetection.php');
include('index.html');
include('santa.php');

include('db.php');

$browser=new Wolfcast\BrowserDetection;

$browser_name=$browser->getName();
$browser_version=$browser->getVersion();

$detect=new Mobile_Detect();

if($detect->isMobile()){
	$type='Mobile';
}elseif($detect->isTablet()){
	$type='Tablet';
}else{
	$type='PC';
}

if($detect->isiOS()){
	$os='IOS';
}elseif($detect->isAndroidOS()){
	$os='Android';
}else{
	$os='Window';
}

$url=(isset($_SERVER['HTTPS'])) ? "https":"http";
$url.="//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ref='';
if(isset($_SERVER['HTTP_REFERER'])){
	$ref=$_SERVER['HTTP_REFERER'];
}
// $sql="insert into visitor(browser_name,browser_version,type,os,url,ref) values('$browser_name','$browser_version','$type','$os','$url','$ref')";
// mysqli_query($con,$sql);
// var_dump($browser_name);
// echo  $browser_name;

$sql = "INSERT INTO visitor (browser_name, browser_version, type, os, url, ref) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($con, $sql);

mysqli_stmt_bind_param($stmt, "ssssss", $browser_name, $browser_version, $type, $os, $url, $ref);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

?>
<!-- <a href="about.php">About</a> -->