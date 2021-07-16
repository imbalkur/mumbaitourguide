<!--<?php
//session_start();
//session_destroy();
//echo "<script>alert('you are logged out sucessfully')</script>";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body></body></html>
<?php
if(session_destroy()){ 
 header('location:..\home1.php');
 }
//header('location:C:\xampp\htdocs\touristguide\login.php');
?>