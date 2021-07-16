<?php
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=	$_POST['email'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$psw=$_POST['psw'];
	//$insertquery = "insert into register(fname,lname,email,gender,phone,psw) values('$fname','$lname','$email','$gender','$phone','$psw')";
    /*$check = mysql_query($insertquery) ;
    if($check){
         echo "<script>alert('Thanks For Registration')</script>";
		}
    else{
        echo "<script>alert('Username or Email already exist/Error')</script>";
         }
     }*/
	  if (!empty($fname) || !empty($lname) || !empty($email) || !empty($gender) || !empty($phone) || !empty($psw)) {
     $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "touristguide";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
         $SELECT = "SELECT email From register Where email = ? Limit 1";
         $INSERT = "INSERT Into register (fname, lname, email, gender, phone, psw) values(?, ?, ?, ?, ?, ?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $stmt->bind_result($email);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssis", $fname, $lname,  $email, $gender, $phone, $psw);
          $stmt->execute();
        echo "<script> alert('You have registered sucessfully now you may proceed to login');
		 window.location.href='login.php';
		</script>";
		   //header("Location: login.php");
		   redirect('login.php', 'refresh');
         } else {
          echo "<script> alert('Someone already registered using this email');
		 window.location.href='register.php';</script>";
         }
         $stmt->close();
         $conn->close();
        }
    } else {
     echo "<script> alert('All field are required')</script>";
    }
?>		