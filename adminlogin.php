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
			<a href="register.php" class="right">User Register</a>
		</div>
		<form action="adminlogindo.php" method="POST" class="main">
			<label class="regis"> Admin login </label> <br /> <br />
			<div class="container">																
			<label for="email"><b>Email id: </b></label>
			<input type="email" placeholder="eg: example@example.com" name="email" style="float:right" required> <br /> <br />
			<label for="psw"><b>Password: </b></label> 
			<input type="password" placeholder="Enter Password" name="psw" style="float:right" required>  <br /> <br />
			<input type="submit" value="Login" name="login" ><br />
			</div><br />
		</form>
	</body>
</html>