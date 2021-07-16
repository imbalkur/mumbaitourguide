<?php
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$email =$_POST['email'];
$gender =$_POST['gender'];
$phone= $_POST['phone'];
$psw =$_POST['psw'];

$conn = new mysqli_connect("localhost", "root", "", "touristguide");
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
else {
	$stmt = $conn
	$conn->prepare("INSERT into register (fname, lname, email, gender, phone, psw) values(?,?,?,?,?)");
	$stmt->bind_param("ssssis",$fname, $lname, $email, $gender, $phone, $psw);
	$stmt->execute();
	echo "registered successfully";
	$stmt->close();
	$conn->close();
}

?>