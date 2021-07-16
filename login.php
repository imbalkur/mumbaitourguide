<!DOCTYPE html><!--login page-->
<html>
	<head>
		<meta charset="utf-8">
		<title> Tourist Guide </title>
		<link rel="stylesheet" href="css/login.css" type="text/css" />
	</head>
	<body>
		<div class="navbar">
			<a href="home1.php" style="float:left">Mumbai</a>
			<a href="About.php" class="right">About</a>
			<a href="register.php" class="right">Register</a>
		</div>
		<h1>Welcome, <br />to Tourist Guide </h1>
		<form action="logindo.php" method="POST" class="main">
			<label class="login"> Login </label> <br />
			<div class="imgcontainer">
				<img src="images/avatar2.jpg" alt="Avatar" class="avatar" height="100px" width="100px"> 	 <!--avatar-->
			</div>
			<div class="container">
				<label for="email"><b>Email id</b></label> <br />
				<input type="text" placeholder="Enter email" name="email" required> <br /> <br />
				<label for="psw"><b>Password</b></label> <br />
				<input type="password" placeholder="Enter Password" name="psw" required>  <br /> <br />
				<button type="submit" name="submit">Login</button> <br />
				<input type="checkbox" checked="checked" name="remember"> Remember me
			</div><br />
			<div class="container2" style="">
				new user?<a href="register.php"> register here</a> 		<br />					 			 <!--registering user-->
			</div>
		</form>
	</body>
</html>