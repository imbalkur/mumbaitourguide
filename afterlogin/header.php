<?php include("connection.php"); 
	session_start(); if(isset($_SESSION['loginname'])){$login=$_SESSION['loginname'];
	$query= "select * from register where email='$login' ";
	$result= mysql_query($query);
	while($rows=mysql_fetch_assoc($result)){//	echo "Welcome! ";//echo $rows['fname']; 
}} ?>
<!--navbar1-->
<div ><img src="images/tour1.png" class="imgtop" height="70%" width="100%" id="imgtop" alt=""> </img></div> 
<!--navbar2-->
<div class="navbar2" id="mynavbar2">
	<a href="home1.php" class="left"> Mumbai</a>
	<a href="places.php" class="left">  Places to go</a>
	<a href="time.php" class="left"> Best time to visit</a>
	<a href="hotel.php" class="left"> Hotels</a>
	<a href="package.php" class="left"> Packages</a>
	<a href="guide.php" class="left"> Tour Guide</a>
	<div class="dropdown" style="float: left">
		<button class="dropbtn">More<i class="fa fa-caret-down"></i></button>
		<div class="dropdown-content">
			<a href="food.php" > Food</a>
			<a href="safety.php"> Safety</a>
			<a href="photo.php" > Photos</a>
			<a href="map.php" class=""> Map</a>
		</div>
	</div>
	<a href="#about1" class="left">About</a>
	<div class="dropdown">
		<button class="dropbtn">My Account<i class="fa fa-caret-down"></i></button>
		<div class="dropdown-content">
			<a href="profile.php" name="email" value="">Profile</a>
			<a href="message.php" value="">Messages</a>
			<a href="logout.php">Logout</a>
		</div>
	</div>
	<a href="javascript:void(0);" class="icon" onclick="myFunction2()"> <!--dropdown nav-->
		<i class="fa fa-bars"></i>
	</a>
</div>