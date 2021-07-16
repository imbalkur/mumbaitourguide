<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tourist Guide</title>
		<link rel="stylesheet" href="css/profile.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>button{
			border: 1px solid black;
			border-radius: 8px;
			padding: 10px;
			background-color: yellow;
			cursor: pointer;
		}</style>
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="content">  <!--content start-->
			<div class="usernameprofile" background="C:/xampp/htdocs/touristguide/afterlogin/images/gradient.jpg"><br />
				<h1><?php
					if(isset($_SESSION['loginname'])){
					$login=$_SESSION['loginname'];
					$query= "select * from register where email='$login' ";
					$result= mysql_query($query);
					while($rows=mysql_fetch_assoc($result)){//echo "Name: &nbsp&nbsp"; 
					echo $rows['fname']; echo "&nbsp "; echo $rows['lname'];  echo "<br  />";
					}}?>
				</h1>
				<?php
				if(isset($_SESSION['loginname'])){
				$login=$_SESSION['loginname'];
				$query= "select * from register where email='$login' ";
				$result= mysql_query($query);
				while($rows=mysql_fetch_assoc($result)){
				echo "Email: &nbsp&nbsp"; echo $rows['email'];  echo "<br  />";
				echo "Gender:&nbsp&nbsp "; echo $rows['gender']; echo "<br  />";
				echo "Phone:&nbsp&nbsp"; echo $rows['phone']; echo "<br  />";
				//echo $rows[''];
				}}
				?><br />
			</div>
			<div class="hotelbookingdetails"><br />
				<h2>Hotel Booking details</h2> <br />
				<?php
				if(isset($_SESSION['loginname'])){
				$login=$_SESSION['loginname'];
				$query= "select * from hotel where email='$login' ";
				$result= mysql_query($query);
				while($rows=mysql_fetch_assoc($result)){
				echo "Hotel Name: &nbsp&nbsp"; echo $rows['hotel_name']; echo "&nbsp "; echo "<br  />";
				echo "Checkin date:&nbsp"; echo $rows['h_checkin'];  echo "<br  />";
				echo "Checkout date:&nbsp"; echo $rows['h_checkout'];  echo "<br  />";
				echo "No of guest:&nbsp "; echo $rows['no_of_guest']; echo "<br  />";
				echo "Room Type:&nbsp"; echo $rows['room_type']; echo "<br  />";
				echo "No of room:&nbsp"; echo $rows['no_of_room']; echo "<br  />";
				echo "Breakfast:&nbsp"; echo $rows['breakfast']; echo "<br  />";
				echo "Lunch:&nbsp";  echo $rows['lunch']; echo "<br  />";
				echo "Dinner:&nbsp";  echo $rows['dinner']; echo "<br  />";
				?>
				<a href="deletebooking.php?del=<?php echo $rows["hotel_id"]; ?>"><button type="submit" name="submit">Cancel Booking</button></a>
				<?php echo "<br  />";echo "<br  />";echo "<br  />";
				} if(empty($rows=mysql_fetch_assoc($result))){
				echo "---";}	}
				?>
			</div>
			<div class="pkgbookingdetails"><br />
				<h2>Pakage Booking details</h2> <br />
				<?php
				if(isset($_SESSION['loginname'])){
				$login=$_SESSION['loginname'];
				$query= "select * from package where email='$login' ";
				$result= mysql_query($query);
				while($rows=mysql_fetch_assoc($result)){	
				echo "Package Name: &nbsp&nbsp"; echo $rows['package_name']; echo "&nbsp "; echo "<br  />";
				echo "Departure date:&nbsp"; echo $rows['departure_date'];  echo "<br  />";
				echo "No of guest:&nbsp "; echo $rows['no_of_guest']; echo "<br  />";
				echo "Car:&nbsp"; echo $rows['car']; echo "<br  />";
				echo "Hotel:&nbsp"; echo $rows['hotel']; echo "<br  />";
				echo "No of room:&nbsp"; echo $rows['no_of_room']; echo "<br  />";
				echo "Room Type:&nbsp";  echo $rows['room_type']; echo "<br  />";
				?><a href="deletebooking.php?dell=<?php echo $rows["package_id"]; ?>"><button type="submit" name="submit">Cancel Booking</button></a>
				<?php				echo "<br  />"; echo "<br  />";
				//echo "Dinner:&nbsp";  echo $rows['dinner']; echo "<br  />";echo "<br  />";echo "<br  />";
				//echo $rows[''];	
				}
				if(empty($rows=mysql_fetch_assoc($result))){
				echo "---";}	}
					?>
					
			</div>
			<div class="guidebookingdetails"><br />
				<h2>Tour Guide Booking details</h2> <br />
				<?php
				if(isset($_SESSION['loginname'])){
				$login=$_SESSION['loginname'];
				$query= "select * from guide where email='$login' ";
				$result= mysql_query($query);
				while($rows=mysql_fetch_assoc($result)){
				echo "Tour Guide Name: &nbsp&nbsp"; echo $rows['guidename']; echo "&nbsp "; echo "<br  />";
				echo "Date:&nbsp"; echo $rows['date'];  echo "<br  />";
				echo "Time From:&nbsp "; echo $rows['timefrom']; echo "<br  />";
				echo "Time till:&nbsp"; echo $rows['timetill']; echo "<br  />";
				echo "No of Traveller:&nbsp"; echo $rows['no_of_traveller']; echo "<br  />";
				echo "Tour Location:&nbsp"; echo $rows['location']; echo "<br  />";
				?><a href="deletebooking.php?dele=<?php echo $rows["tourguide_id"]; ?>"><button type="submit" name="submit">Cancel Booking</button></a>
				<?php
				echo "<br  />"; echo "<br  />";
				//echo "Dinner:&nbsp";  echo $rows['dinner']; echo "<br  />";echo "<br  />";echo "<br  />";
				//echo $rows[''];	
				}
				if(empty($rows=mysql_fetch_assoc($result))){
				echo "---";
				}	}
				?>
				
			</div>
		</div>
		<?php include("footer.php"); ?>
	</body>
<!--for fixed navbar2-->
<script>
window.onscroll = function() {myFunction()};

var navbar2 = document.getElementById("mynavbar2");
var sticky = navbar2.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    navbar2.classList.add("sticky");
  } else {
    navbar2.classList.remove("sticky");
  }
}
<!--responsive navbar-->
function myFunction2() {
  var x = document.getElementById("mynavbar2");
  if (x.className === "navbar2") {
    x.className += " responsive";
  } else {
    x.className = "navbar2";
  }
}
</script>
</html>