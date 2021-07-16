<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Tourist Guide </title>
		<link rel="stylesheet" href="css/register.css" type="text/css" />
	</head>
	<body>
		<div class="navbar">
			<a href="home1.php" style="float:left">Mumbai</a>
			<a href="About.php" class="right">About</a>
			<a href="login.php" class="right">Login</a>
		</div>
		<form action="register1.php" method="POST" class="main">
			<label class="regis"> Register User </label> <br /> <br />
			<div class="container">																<!--Username-->
			<label for="fname"><b>First name: </b></label> <input type="text" placeholder="Enter firstname" name="fname" style="float:right" required> <br /> <br />
			<label for="lname"><b>Last name: </b></label><input type="text" placeholder="Enter lastname" name="lname" style="float:right" required> <br /> <br />
			<label for="email"><b>Email id: </b></label>
			<input type="email" placeholder="eg: example@example.com" name="email" style="float:right" required> <br /> <br />
			<label for="gender"><b>Gender: </b></label>
			<input type="radio" name="gender" value="male" required>male
			<input type="radio" name="gender" value="female" required>female 
			<input type="radio" name="gender" value="other" required>other	<br /> <br />
			<label for="phone"><b>Mobile Number: </b></label>
			<input type="tel"  pattern="[7-9]{1}[0-9]{9}" placeholder="eg: 9870000000" name="phone" style="float:right"  required> <br /> <br />
			<label for="psw"><b>Password: </b></label> 
			<input type="password" placeholder="Enter Password" name="psw" style="float:right" required>  <br /> <br />
			<input type="submit" value="register" name="register" ><br />
			</div><br />
			<div class="container2" style="">
			already registered?<a href="login.php"> Login</a> 		<br />					 			 <!--registering user-->
			</div>
		</form>
	</body>
</html>