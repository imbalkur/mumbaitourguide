<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="touristguide"; // Database name
$tbl_name="admin"; // Table name
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or
die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");	
if(isset($_REQUEST["login"]))
{
 $email=$_REQUEST["email"];
 $password=$_REQUEST["psw"];
 $query=mysql_query("select * from admin where email='$email' && psw='$password'");
 //$username=mysql_query("select fname from register where email='$email'");
 $rowcount=mysql_num_rows($query);
 if($rowcount==true)
 {
  session_start();
		$_SESSION['loginname'] = $email;
		//$_SESSION['username']=$username;
		header("Location:afterlogin/admin.php");
 }else{
	 ?>
	 <script> alert("incorrect email or password");window.history.back();</script>
	 <?php
 }}
?>