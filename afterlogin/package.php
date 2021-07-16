<!DOCTYPE html>
<html>
	<head>
		<title>Tourist Guide</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/package.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<?php include("header.php"); ?>
		<div class="content">  <!--content start-->
			<div>
				<h1>Mumbai Tour(4 days)</h1>
				<section class="sectionone">
				<article>
					<img src="images/aboutimg.jpg" class="mumimg" align="left" alt="" style="padding-right:15px"> </img>
					Inclusions<br />
					• 3 night stay (on twin sharing basis)<br />
					• Breakfast (Kindly check timings & venue from the hotel)<br />
					• Return Airport transfers by Non AC vehicle on seat sharing basis<br />
					• Sightseeing by Non AC vehicle on seat sharing basis<br />
					• Driver's allowance, Road tax and Fuel charges<br />
					• Parking and Toll taxes<br />
					• All presently applicable hotel and airline taxes<br />
					• Should there be any further levy of Govt. / statutory taxes or charges, the same shall be chargeable extra as and when applicable.<br /><br /><br /><br />
					<b>Will be staying in Hotel Midland</b>   <!--<a href="#" >show in map></a>-->
				</article>
				<nav>
					<h3>Rs. 20,000*</h3>
					<div id="overlay" onclick="off()">
						<div id="text">
							<p>Day 1: Arrive Mumbai<br />
							Welcome to your 'Bollywood Tour'holiday! On arrival at the airport / railway station in Mumbai, you will be met and transferred to your hotel.<br /><br />
							Day 2:	Mumbai (Bollywood Tour) <br />
							Take breakfast in the hotel and later the bollywood tour guide will meet in the lobby of the hotel and will be taken to one of the Bollywood studios i.e. Film City where you can watch all outdoor shootings in progress on the tour date. He will then provide an introduction to the guests informing them about the origin and evolution of the Indian Film Industry (Bollywood) ranging from the silent era to talkies to current date. He will elaborate you about any two of the following like make- up, editing, dubbing, processing of raw film Background music, animation and Sound effects, vision mixing, special effects, set -making, choreography, stunt rehearsals, publicity campaigns etc. In the afternoon You will be taken to see bungalows of famous film star and also various sites in Dharavi where the film “Slumdog Millionaire” was shot. Back to Hotel. Rest of time free at leisure. Overnight stay in hotel. <br />
							Featured Attractions: Prince of Wales Museum, Marine Drive, Dhobi Ghat, Malabar Hill Club<br /><br />
							Day 3:Mumbai (City Tour)<br />
							Morning after breakfast enjoy a day tour of the city visiting the British-built arch ‘Gateway of India,’ the Hanging Gardens and the affluent community of Malabar Hills The Prince of Wales Museum, Dhobi Ghats, Marine Drive, Choupatty Beach and Crawford Market. Rest of time free for shopping. Overnight stay in Mumbai.<br /><br />
							Day 4:	Mumbai departure<br />
							Take breakfast in the hotel and enjoy your leisure time until we assist you to transfer to Mumbai Airport to board the flight for onward destination. Tour Ends with Happy memories.<br /><br /></div>
						</div>
						<button id="myBtn1" onclick="on()">View Detail</button><br /> 
						<button id="myBtn2">Book Now</button><br /> <br />
						<div class="chip"><img src="images/phone_icon.png" alt="Person" width="96" height="96">255-5464-5353</div>
						<div id="myModal" class="modal">
							<div class="modal-content">
								<span class="close">&times;</span>
								<header>Online Tour Booking</header>	
								<form action="package.php" method="POST">
									<?php include('/connection.php'); if(isset($_SESSION['loginname'])) ;if(isset($_SESSION['username']))?> 
									<input type="hidden" value="Mumbai" name="pname">
									<label for="indate"><b>Departure Date:</b><label ><input id="date" type="date" name="date" required><br /><br />
									<label for="guest"><b>Number of guest:</b><label >
									<input id="guest" type="number" name="guest" min="1" max="6" required><br /> <br />	
									<label for="car"><b>Choose a Car:</b> </label>
									<select name="car" required>
									<option value="tata"> Tata indica</option>
									<option value="sedan">Sedan</option>
									<option value="suv">SUV</option>
									</select><br /> <br />
									<label for="hotel"><b>Select Hotel:</b> </label>
									<select name="hotel" required>
									<option value="Midland"> Hotel Midland</option>
									<option value="Siesta">Hotel Siesta </option>
									<option value="Porto">Hotel Porto </option>
									</select> <br /> <br />
									<label for="nroom"><b>Number of Rooms:</b><label >
									<input id="nroom" type="number" name="nroom" min="1" max="3" required><br /> <br />	
									<label for="room"><b>Select Room:</b> </label>
									<select name="room" required>
									<option value="standard"> Standard Room</option>
									<option value="superior">Superior Room </option>
									<option value="executive">Deluxe Room </option>
									</select><br /> <br />
									<button type="submit" name="submit">Book</button>
								</form>
							</div>
						</div>
					</nav>
				</section>
			</div>
			<div>
				<h1>Mumbai(3N), Aurangabad(2N)</h1>
				<section class="sectiontwo">
				<article>
					<img src="images/aurangabad.jpg" class="mumimg" align="left" alt="" style="padding-right:15px"> </img>
					5 nights,6 days<br />
					Inclusions<br />
					• 5 night stay (on twin sharing basis)<br />
					• Breakfast (Kindly check timings & venue from the hotel)<br />
					• Return Airport transfers by Non AC vehicle on seat sharing basis<br />
					• Sightseeing by Non AC vehicle on seat sharing basis<br />
					• Driver's allowance, Road tax and Fuel charges<br />
					• Parking and Toll taxes<br />
					• All presently applicable hotel and airline taxes<br />
					<br /><br /><br /><br /><br />
					<b>Will be staying in Hotel Midland</b>   <!--<a href="#" >show in map></a>-->
				</article>
				<nav>
					<h3> Rs. 12,000*</h3>
					<div id="overlay1" onclick="off1()">
						<div id="text">
						Note: This itinerary is customizable. You can talk to the travel agent and further customize it as per your requirements.<br />
						Day 1:Arrive Mumbai<br />Upon arrival at Mumbai airport meet with our representative and transfer to your pre-booked hotel. Overnight stay at hotel.Featured Attractions: Hanging Gardens, Marine Drive, Ellora Caves<br />
						Day 2:Mumbai<br />
						After breakfast we will leave for an excellent sightseeing tour of Mumbai's most iconic sites starting with a visit to the Gateway of India; further we will visit The Prince of Wales Museum, and a stop at Mani Bhavan, the house where Mahatma Gandhi used to stay during his visits to Mumbai. We will also drive along the Marine Drive and visit the Hanging Gardens. Stop off at Colaba Causeway before returning to your hotel. Later transfer to the hotel for overnight stay.<br />Featured Attractions: Ajanta Caves<br />
						Day 3	:Mumbai - Aurangabad - Ellora Caves<br />
						After breakfast transfer to the airport to board the flight for Aurangabad. Upon arrival meet with our representative and transfer to the hotel. After fresh-n-up we will go on an excursion tour to Ellora Caves. The caves are over 2000 years old and consist of temples and monasteries hewn from rocks by Buddhist Hindu and Jains monks and craftsmen. Later return to hotel for overnight stay.<br />
						Day 4	:Aurangabad - Ajanta Caves<br />
						Morning after breakfast drive to Ajanta via Aurangabad to have full day excursion to Ajanta Caves - they are cut from the volcanic lavas of the Deccan trap in a steep crescent Shaped hillside in a forested ravine of the sahyadri hills, These caves are older than those at Ellora consisting of 24 monasteries and temples hewn out of solid rack. (Ajanta caves are closed on Monday). Later return to the hotel. After fresh-n-up enjoy local city sightseeing tour visiting Bibi Ka Maqbara - situated about 3 km from the city is Bibi Ka Maqbara The burial place of Aurangzeb's wife, Rabia-ud-Durrani.<br />
						Day 5	:Aurangabad - Mumbai<br />
						After breakfast transfer to the airport to board the flight for Mumbai. Upon arrival meet with our representative and transfer to the hotel. Evening free for own activity or enjoy rest of the day at leisure. Overnight stay at hotel.<br />
						Day 6	:Mumbai depart<br />
						Transfer to the international airport to board the flight for onward destination.
						</div>
					</div>
					<button id="myBtn11" onclick="on1()">View Detail</button><br /> 
					<button id="myBtn21">Book Now</button><br /> <br />
					<div class="chip"><img src="images/phone_icon.png" alt="Person" width="96" height="96">255-5464-5353</div>
						<div id="myModal1" class="modal">
							<div class="modal-content">
								<span class="close1">&times;</span>
								<header>Online Tour Booking</header>
								<form action="package.php" method="POST">
								<?php include('/connection.php'); if(isset($_SESSION['loginname'])) ;if(isset($_SESSION['username']))?> 
								<input type="hidden" value="Mumbai/Aurangabad Tour" name="pname">
								<label for="indate"><b>Departure Date:</b><label ><input id="date" type="date" name="date" required><br /><br />
								<label for="guest"><b>Number of guest:</b><label >
								<input id="guest" type="number" name="guest" min="1" max="6" required><br /> <br />
								<label for="car"><b>Choose a Car:</b> </label>
								<select name="car" required>
								<option value="tata"> Tata indica</option>
								<option value="sedan">Sedan</option>
								<option value="suv">SUV</option>
								</select><br /> <br />
								<label for="hotel"><b>Select Hotel:</b> </label>
								<select name="hotel" required>
								<option value="Midland"> Hotel Midland</option>
								<option value="Siesta">Hotel Siesta </option>
								<option value="Porto">Hotel Porto </option>
								</select> <br /> <br />
								<label for="nroom"><b>Number of Rooms:</b><label >
								<input id="nroom" type="number" name="nroom" min="1" max="3" required><br /> <br />
								<label for="room"><b>Select Room:</b> </label>
								<select name="room" required>
								<option value="standard"> Standard Room</option>
								<option value="superior">Superior Room </option>
								<option value="executive">Deluxe Room </option>
								</select><br /> <br />
								<button type="submit" name="submit" >Book</button>
								</form>
								<?php
								include('connection.php');	
								if(isset($_POST['submit']))
								{$pname=$_POST['pname'];
								$loginname=	$_SESSION['loginname'];
								$date =$_POST['date'];
								$guest=$_POST['guest'];
								$car=$_POST['car'];
								$hotel=$_POST['hotel'];
								$nroom=$_POST['nroom'];
								$room=$_POST['room'];
								$s1="INSERT INTO package (package_name,email,departure_date,no_of_guest,car,hotel,no_of_room,room_type)VALUES('".$pname."','".$loginname."','".$date."','".$guest."','".$car."','".$hotel."','".$nroom."','".$room."') ";
								mysql_query($s1) or die (mysql_error($conn));
								//header("location:package.php");
								echo "<script> alert('your package is successfully booked');	</script>";
								}?>		
							</div>
						</div>
					</nav>
				</section>
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

<!--responsive navbar-->
function myFunction2() {
  var x = document.getElementById("mynavbar2");
  if (x.className === "navbar2") {
    x.className += " responsive";
  } else {
    x.className = "navbar2";
  }
}

//tour info
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}

//tour2 info
function on1() {
  document.getElementById("overlay1").style.display = "block";
}

function off1() {
  document.getElementById("overlay1").style.display = "none";
}

//tour booking
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

//tour2 booking
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
</script>
</html>