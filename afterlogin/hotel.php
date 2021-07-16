<!DOCTYPE html>
<html>
	<head>
		<title>Tourist Guide</title>
		<link rel="stylesheet" href="css/hotel.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<?php include("header.php"); ?>
		<div class="content">  <!--content start-->
<!--
<div>
<img src="" class="mumimg" height="300px" alt=""> </img>
</div>-->

<!--hotel 1-->
			<div class="card">
				<div class="container">
					<h1>Hotel Midland</h1>
					<img src="images/midland.jpg" class="mumimg" height="250px" width="42%" alt=""> </img>
					<img src="images/midland2.jpg" class="mumimg" height="250px" width="52%" alt=""> </img>
					<p>Located near business hubs of Andheri and Kurla, Hotel Midland features an art gallery, fitness center, outdoor pool and restaurant and bar.<br /> Location: Conveniently located in the commercial hub of Mumbai on Andheri-Kurla Road, the Hotel Kohinoor Continental is a short drive frommodes of connectivity such as Mumbai International Airport (2 km), Kurla Junction Railway Station (13 km). Along with Central Mumbai sights which are just 15 km away, major tourist attractions nearby include ISKCON Temple and Juhu Beach (6 km).</p>
					<h2>Rs.700/-</h2>per standard room/day <br />
					<div id="overlay" onclick="off()">
						<div id="text">
							<p><b>Standard Room (Rs. 700)</b> <br />
							• 1 double bed <br />
							• Bath  • Air conditioning  • Ensuite bathroom  • Flat-screen TV  • Soundproofing <br />
							• Shower  • TV  • Telephone  • Hairdryer  • Ironing Facilities  • Free toiletries  • Fan  • Toilet  • Microwave  • Cable Channels  • Bath or Shower  • Additional Toilet  • Tile/Marble floor  • Wake-up service  • Electric kettle  • Towels/Sheets (extra fee)  • Oven  • Computer  • Hypoallergenic  • Cleaning products  • Towels  • Linen  • Entire unit located on ground floor  • Entire unit wheelchair accessible  • Toilet paper  • Board games/puzzles  • Books, DVDs or music for children  • Raised toilet</p>
							<p><b>Superior Room (Rs. 1200)</b> <br />• 1 double bed <br />Bath  Air conditioning  Ensuite bathroom  Flat-screen TV  Soundproofing
							• Shower  • Safety Deposit Box  • TV  • Telephone  • Hairdryer  • Ironing Facilities  • Free toiletries  • Fan  • Toilet  • Microwave  • Cable Channels  • Bath or Shower  • Additional Toilet  • Laptop safe  • Tile/Marble floor  • Wake-up service  • Electric kettle  • Towels/Sheets (extra fee)  • Oven  • Computer  • Hypoallergenic  • Cleaning products  • Towels  • Linen  • Entire unit located on ground floor  • Entire unit wheelchair accessible  • Toilet paper  • Board games/puzzles  • Books, DVDs or music for children  • Raised toilet</p>
							<p><b>Deluxe Room (Rs. 2000)</b> <br />• 1 double bed <br />Bath  Air conditioning  Ensuite bathroom  Flat-screen TV  Soundproofing
							• Shower  • Safety Deposit Box  • TV  • Telephone  • Hairdryer  • Iron  • Trouser Press  • Ironing Facilities  • Seating Area  • Free toiletries  • Fan  • Toilet  • Microwave  • Slippers  • Cable Channels  • Bath or Shower  • Additional Toilet  • Laptop safe  • Tile/Marble floor • Wake-up service  • Electric kettle  • Towels/Sheets (extra fee)  • Oven  • Computer  • Hypoallergenic  • Cleaning products  • Towels  • Linen  • Entire unit located on ground floor  • Entire unit wheelchair accessible  • Toilet paper  • Board games/puzzles  • Books, DVDs or music for children  • Roll in shower • Raised toilet</p>
							<p>
								<b>Breakfast: Rs.100</b><br />
								<b>Lunch: Rs. 200</b><br />
								<b>Dinner: Rs. 200 </b><p>
						</div>
					</div>
					<button id="myBtn1" onclick="on()">View Detail</button>
					<button id="myBtn2">Book Now</button>		<!--booking hotel 1-->
					<div id="myModal" class="modal">
						<div class="modal-content">
							<span class="close">&times;</span>
							<header>Online Booking</header>
							<form action="hotel.php" method="POST">
							<?php
								include('/connection.php');	
								if(isset($_SESSION['loginname']));
								if(isset($_SESSION['username']));	?> 
								<input type="hidden" for="hotelname" name="hotelname" value="Midland">
								<label for="indate"><b>Check-in Date:</b><label ><input id="date" type="date" name="date" required>
								<label for="outdate"><b>Check-out Date:</b><label ><input id="date1" type="date" name="date1" required> <br /> <br />
								<label for="guest"><b>Number of guest:</b><label >
								<input id="guest" type="number" name="guest" min="1" max="6" required><br /> <br />
								<label for="room"><b>Select Room:</b> </label>
								<select name="room" required>Select Rooms
								<option value="standard"> Standard Room</option>
								<option value="superior">Superior Room </option>
								<option value="executive">Deluxe Room </option>
								</select><br /> <br />
								<label for="nroom"><b>Number of Rooms:</b><label >
								<input id="nroom" type="number" name="nroom" min="1" max="3" required><br /> <br />
								<label for="meal" name="meal"><b>Meal?</b></label><br />
								<input type="checkbox" id="breakfast" name="breakfast" value="yes">Breakfast</input><br />
								<input type="checkbox" id="lunch" name="lunch" value="yes">Lunch</input><br />
								<input type="checkbox" id="dinner" name="dinner"  value="yes">Dinner</input><br /><br /> <br />
								<button type="submit" name="submit">Book</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--hotel 2-->
			<div class="card">
				<div class="container1">
					<h1>Hotel Siesta Andheri</h1>
					<img src="images/siesta.jpg" class="mumimg" height="250px" width="50%" alt=""> </img>
					<img src="images/siesta2.jpg" class="mumimg" height="250px" width="45%" alt=""> </img>
					<p>Siesta Andheri is situated in the electrifying city of Mumbai. The city is famous for its splendid Victorian architecture, urban lifestyle, business hullabaloo, entertainment industry, energetic abode and obdurate beauty. Andheri Railway Station is at a distance of 350 m from the property which makes it a prime abode for guests accommodation. The location of the hotel is a perfect get away from one's mundane life, offering peace and tranquility to the travelers. The rooms are simple yet elegant, airy and brightly lit. The staff ensures that all the rooms are clean, comfortable and sumptuous.<br /> The interiors and rooms of the hotel are designed by keeping guests comfort in mind. In case of emergency, doctor on call facility can be availed. Guests, in their leisure time, can explore the city by visiting ISKCON Temple (4 km), Juhu Beach (4 km), Prithvi Theatre (5 km), Lokhandwala Complex (6 km), Infiniti Mall (6 km) and many more places. Chhatrapati Shivaji International Airport is at a distance of 4 km from the hotel. Have a fabulous stay at Siesta Andheri!</p>
					<h2>Rs.850/-</h2>per standard room/day <br />
					<div id="overlay1" onclick="off1()">
						<div id="text1">
							<p><b>Standard Room (Rs. 850)</b> <br />
							• 1 double bed <br />• Bath  • Air conditioning  • Ensuite bathroom  • Flat-screen TV  • Soundproofing <br />
							• Shower  • TV  • Telephone  • Hairdryer  • Ironing Facilities  • Free toiletries  • Fan  • Toilet  • Microwave  • Cable Channels  • Bath or Shower  • Additional Toilet  • Tile/Marble floor  • Wake-up service  • Electric kettle  • Towels/Sheets (extra fee)  • Oven  • Computer  • Hypoallergenic  • Cleaning products  • Towels  • Linen  • Entire unit located on ground floor  • Entire unit wheelchair accessible  • Toilet paper  • Board games/puzzles  • Books, DVDs or music for children  • Raised toilet</p>
							<p><b>Superior Room (Rs. 1400)</b> <br />• 1 double bed <br />Bath  Air conditioning  Ensuite bathroom  Flat-screen TV  Soundproofing
							• Shower  • Safety Deposit Box  • TV  • Telephone  • Hairdryer  • Ironing Facilities  • Free toiletries  • Fan  • Toilet  • Microwave  • Cable Channels  • Bath or Shower  • Additional Toilet  • Laptop safe  • Tile/Marble floor  • Wake-up service  • Electric kettle  • Towels/Sheets (extra fee)  • Oven  • Computer  • Hypoallergenic  • Cleaning products  • Towels  • Linen  • Entire unit located on ground floor  • Entire unit wheelchair accessible  • Toilet paper  • Board games/puzzles  • Books, DVDs or music for children  • Raised toilet</p>
							<p><b>Deluxe Room (Rs. 2700)</b> <br />• 1 double bed <br />Bath  Air conditioning  Ensuite bathroom  Flat-screen TV  Soundproofing
							• Shower  • Safety Deposit Box  • TV  • Telephone  • Hairdryer  • Iron  • Trouser Press  • Ironing Facilities  • Seating Area  • Free toiletries  • Fan  • Toilet  • Microwave  • Slippers  • Cable Channels  • Bath or Shower  • Additional Toilet  • Laptop safe  • Tile/Marble floor • Wake-up service  • Electric kettle  • Towels/Sheets (extra fee)  • Oven  • Computer  • Hypoallergenic  • Cleaning products  • Towels  • Linen  • Entire unit located on ground floor  • Entire unit wheelchair accessible  • Toilet paper  • Board games/puzzles  • Books, DVDs or music for children  • Roll in shower • Raised toilet</p>
							<p><b>Breakfast: Rs.150</b><br /><b>Lunch: Rs. 230</b><br /><b>Dinner: Rs. 240 </b><p>
						</div>
					</div>
					<button id="myBtn11" onclick="on1()">View Detail</button>
					<button id="myBtn21">Book Now</button>   <!--booking hotel 2-->
					<div id="myModal1" class="modal1">
						<div class="modal-content1">
							<span class="close1">&times;</span>
							<header>Online Booking</header>
							<form action="hotel.php" method="POST">
								<?php include('/connection.php'); if(isset($_SESSION['loginname'])) ;if(isset($_SESSION['username']))?> 
								<input type="hidden" for="hotelname" name="hotelname" value="Siesta">
								<label for="indate"><b>Check-in Date:</b><label ><input id="date" type="date" name="date" required>
								<label for="outdate"><b>Check-out Date:</b><label ><input id="date1" type="date" name="date1" required> <br /> <br />
								<label for="guest"><b>Number of guest:</b><label >
								<input id="guest" type="number" name="guest" min="1" max="6" required><br /> <br />
								<label for="room"><b>Select Room:</b> </label>
								<select name="room" required>Select Rooms
								<option value="standard"> Standard Room</option>
								<option value="superior">Superior Room </option>
								<option value="executive">Deluxe Room </option></select><br /> <br />
								<label for="nroom"><b>Number of Rooms:</b><label >
								<input id="nroom" type="number" name="nroom" min="1" max="3" required><br /> <br />
								<label for="meal" ><b>Meal?</b></label><br />
								<input type="checkbox" id="breakfast" name="breakfast" value="yes">Breakfast</input><br />
								<input type="checkbox" id="lunch" name="lunch" value="yes">Lunch</input><br />
								<input type="checkbox" id="dinner" name="dinner" value="yes" >Dinner</input><br /><br /> <br />
								<button type="submit" name="submit">Book</button>
							</form>
							<?php
							include('connection.php');	
							if(isset($_POST['submit']))
							{$hotelname=$_POST['hotelname'];
							$loginname=	$_SESSION['loginname'];
							$checkin =$_POST['date'];
							$checkout=$_POST['date1'];
							$guest=$_POST['guest'];
							$room=$_POST['room'];
							$nroom=$_POST['nroom'];
							$breakfast=$_POST['breakfast'];
							$lunch=$_POST['lunch'];
							$dinner=$_POST['dinner'];
							$checkroom= "select count(*) from hotel where room_type='".$room."' ";
							if (!isset($breakfast)) $breakfast = "no";if (!isset($lunch)) $lunch = "no";if (!isset($dinner)) $dinner = "no";
							$check=mysql_query($checkroom) or die (mysql_error($con));
							$s1="INSERT INTO hotel (hotel_name,email,h_checkin,h_checkout,no_of_guest,room_type,no_of_room,breakfast, lunch,dinner)VALUES('".$hotelname."','".$loginname."','".$checkin."','".$checkout."','".$guest."','".$room."','".$nroom."','".$breakfast."','".$lunch."','".$dinner."') ";
							mysql_query($s1) or die (mysql_error($conn));
							echo "<script> alert('you have successfully booked hotel room');</script>";//header("location:hotel.php");
							}?>		
						</div>
					</div>
				</div>
			</div>
			<?php include("footer.php"); ?>
		</div>  <!--content end-->
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

//hotel booking modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn2");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//hotel booking modal1
var modal1 = document.getElementById("myModal1");
var btn1 = document.getElementById("myBtn21");
var span1= document.getElementsByClassName("close1")[0];
btn1.onclick = function() {
  modal1.style.display = "block";
}
span1.onclick = function() {
  modal1.style.display = "none";
}
window.onclick = function(event1) {
  if (event1.target == modal1) {
    modal1.style.display = "none";
  }
}
//for min date
let today = new Date(),
    day = today.getDate(),
    month = today.getMonth()+1, //January is 0
    year = today.getFullYear();
         if(day<10){
                day='0'+day
            } 
        if(month<10){
            month='0'+month
        }
        today = year+'-'+month+'-'+day;
        document.getElementById("date").setAttribute("min", today);
        document.getElementById("date").setAttribute("value", today);
		 document.getElementById("date1").setAttribute("min", today);
        document.getElementById("date1").setAttribute("value", today);	
function on() {
  document.getElementById("overlay").style.display = "block";
}
function off() {
  document.getElementById("overlay").style.display = "none";
}
function on1() {
  document.getElementById("overlay1").style.display = "block";
}
function off1() {
  document.getElementById("overlay1").style.display = "none";
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