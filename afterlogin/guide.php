<!DOCTYPE html>
<html>
	<head>
		<title>Tourist Guide</title>
		<link rel="stylesheet" href="css/guide.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="content">  <!--content start-->
			<div class="innernavbar">
				<button class="tablink" onclick="openPage('btg', this, 'grey')" id="defaultOpen">Book a Tour Guide</button>
				<button class="tablink" onclick="openPage('rtg', this, 'grey')" >Register as a Tour Guide</button>
				<!--1-->
				<div id="btg" class="tabcontent">
				<!--card1-->
					<div class="card">
						<img src="images/ragini1.jpg" style="width:30%" align="left" style="padding-right:20px">
						<h1>RAGINI DOSHI</h1>
						<p class="title">Private tour guide in Mumbai, Nāshik, Pune</p>
						<p>Tour Guide Experience: 14 year(s)<br />
						Primary Language: English<br />
						Payment Currency: USD<br />
						City of Residence: Mumbai<br />
						<div id="overlay" onclick="off()">
							<div id="text">
								<p>My venture into Guiding Services.
								Well to answer this I need to rewind my thoughts to the year 2004 when I joined the Guides training program conducted by The Government Of India (GOI) , Ministry Of Tourism & Culture . Four months rigorous full-time training imparted by field experts, Historians, Architects alike and all , followed by on- site visit training at the monuments in the Western Region of India including Mumbai . After a written test was selected as approved guide and was granted a license to work as Approved Tour-Guide for The Government Of India and permitted to operate in the Western Region of India including Mumbai, Maharashtra, Madhya Pradesh Gujarat, Goa, Chhattisgarh, Union territory of Daman, Diu, Dadra Nagar Haveli. Have also passed the refresher course conducted by The Government Of India , Ministry Of Tourism & Culture during June 2014.</p>
								Other Guiding Locations:
								Nāshik,
								Pune<br />Gender: Female<br />Pricing Per Group:<br />1 to 3 people: USD $32.00 Per Hour<br />4 to 8 people: USD $39.00 Per Hour<br />9 to 12 people: USD $45.00 Per Hour<br />13 to 20 people: USD $51.00 Per Hour<br /><br />Fixed Rates:<br />USD $125.00 up to 3 people (8 hours max)<br />USD $185.00 up to 5 people (8 hours max)<br />USD $245.00 up to 9 people (8 hours max)<br />USD $335.00 up to 14 people (8 hours max)<br />USD $450.00 up to 20 people (8 hours max)<br />
							</div>
						</div>
						<div style="padding:20px"><button class="viewbtn" onclick="on()">View Detail</button></div>
						<p><button id="button" class="button" onclick="document.getElementById('id01').style.display='block'" style="width:100%">Book Now</button></p>
						<div id="id01" class="modal">
							<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							<form class="modal-content" action="guide.php" method="POST">
								<div class="container">
								<h1>Booking</h1>
								<hr>
								<?php include('/connection.php'); if(isset($_SESSION['loginname'])) ;if(isset($_SESSION['username']))?> 
								<input type="hidden" name="guidename" value="Ragini Doshi">
								<label for="date"><b>Tour Date</b></label>
								<input type="date" placeholder="" name="date" id="date" required><br /><br />
								<label for="time"><b>Tour Time</b></label> <br />
								<label for="time"><b>From</b></label>
								<input type="time" placeholder="10:10 AM" name="time" required> <br />
								<label for="time1"><b>To</b></label>
								<input type="time" placeholder="Time" name="time1" required> <br /><br /><br />
								<label for="ntra"><b>Number of Trevellers</b></label>
								<input type="number" placeholder="1" name="ntra" min="1" max="15" required><br /><br />	  
								<label for="location"><b>Select Tour Location</b></label>
								<select name="location" required>
								<option value="Mumbai">Mumbai</option>
								<option value="Urban">Urban Areas</option>
								<option value="Historical Places">Historical places </option>
								<option value="Museum">Museum</option>
								</select><br /> <br />          
								<div class="clearfix"><button type="submit" name="submit1" class="bookbtn">Book</button></div>
								</div>
							</form>
							<?php
								include('connection.php');	
								if(isset($_POST['submit1'])){
								$loginname=	$_SESSION['loginname'];
								$guidename=$_POST['guidename'];
								$date =$_POST['date'];
								$time=$_POST['time'];
								$time1=$_POST['time1'];
								$ntra=$_POST['ntra'];
								$location=$_POST['location'];
								$s1="INSERT INTO guide (email,guidename,date,timefrom,timetill,no_of_traveller,location)VALUES('".$loginname."','".$guidename."','".$date."','".$time."','".$time1."','".$ntra."','".$location."') ";
								mysql_query($s1) or die (mysql_error($conn));
								//header("location:guide.php");
								echo "<script> alert('your guide has successfully been booked');</script>";
								}?>
						</div>
					</div>
					<!--card2-->
					<div class="card"><img src="images/amod.jpg" style="width:30%" align="left" style="padding-right:10px;">
						<h1>Amod</h1>
						<p class="title">Private tour guide in Aurangābād, Mumbai, Nāshik</p>
						Tour Guide Experience: 10 year(s)<br />
						City of Residence: Aurangābād<br />
						Other Guiding Locations:<br />
						Mumbai,
						Nāshik<br />
						Primary Language: English
						<div id="overlay1" onclick="off1()">
							<div id="text1">
								<p>Hi, Since I am a science graduate from one of the most reputed colleges in India, I had other career options. But I am a guide by choice with 10 years experience in this field ( old enough to explain the ancient monuments ,but young enough to climb all the mountains involved !!!).
								My favorite subjects are Buddhism, Indian Philosophy and Ancient India ( Indus Valley civilization ) and i have conducted numerous theme based tours to Mumbai , Pune, Gujrath and central India.</p><br />
								Gender: Male<br />Age: 55<br /><br /><br />Tour guide services/sample itinerary:<br />1) Ajanta , Ellora and Aurangabad sightseeing ( three days)<br />2) Mumbai , Aurangabad Ajanta Ellora Pitalkhora ( four days)<br />3) Ancient Buddhist monuments in Maharashtra ( upto six days)<br />Apart from these custom theme based tours can also be arranged<br /><br />Pricing Per Group:<br />1 to 4 people: USD $15.00 Per Hour<br />5 to 10 people: USD $18.00 Per Hour<br />11 to 20 people: USD $21.00 Per Hour<br /><br />Fixed Rates:<br />USD $80.00 up to 4 people (8 hours max)<br />USD $100.00 up to 20 people (8 hours max)
							</div>
						</div>
						<div style="padding:20px"><button class="viewbtn1" onclick="on1()">View Detail</button></div>
						<p><button id="button1" class="button1" onclick="document.getElementById('id02').style.display='block'" style="width:100%;">Book Now</button></p>
						<div id="id02" class="modal1">
							<span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal1">&times;</span>
							<form class="modal-content1" action="guide.php" method="POST">
								<div class="container1">
									<h1>Booking</h1>
									<hr>
									<?php include('/connection.php'); if(isset($_SESSION['loginname'])) ;if(isset($_SESSION['username']))?> 
									<input type="hidden" name="guidename" value="Amod">
									<label for="date1"><b>Tour Date</b></label>
									<input type="date" placeholder="" name="date1" id="date1"required><br /><br />     
									<label for="time"><b>Tour Time</b></label> <br /><br />
									<label for="time"><b>From</b></label>
									<input type="time" placeholder="" name="time" required><br />  
									<label for="time1"><b>To</b></label>
									<input type="time" placeholder="" name="time1" required><br /><br /><br />	  
									<label for="ntra"><b>Number of Trevellers</b></label>
									<input type="number" placeholder="" name="ntra" min="1" max="15" required><br /><br />	  
									<label for="location"><b>Select Tour Location</b></label>
									<select name="location" required>
									<option value="Mumbai">Mumbai</option>
									<option value="Urban">Urban Areas</option>
									<option value="Historical Places">Historical places </option>
									<option value="Museum">Museum</option>
									</select><br /> <br />
									<div class="clearfix"><button type="submit" name="submit2" class="bookbtn1">Book</button></div>
								</div>
							</form>
							<?php
								include('connection.php');	
								if(isset($_POST['submit2'])){
								$loginname=	$_SESSION['loginname'];
								$guidename=$_POST['guidename'];
								$date =$_POST['date'];
								$time=$_POST['time'];
								$time1=$_POST['time1'];
								$ntra=$_POST['ntra'];
								$location=$_POST['location'];
								$s1="INSERT INTO guide (email,guidename,date,timefrom,timetill,no_of_traveller,location)VALUES('".$loginname."','".$guidename."','".$date."','".$time."','".$time1."','".$ntra."','".$location."') ";
								mysql_query($s1) or die (mysql_error($conn));
								//header("location:guide.php");
								echo "<script> alert('your guide has successfully been booked');</script>";
								}?>
						</div>
					</div> 
				</div>
				<!--2-->
				<div id="rtg" class="tabcontent">
					<h3>Register yourself as a Tour Guide. </h3>
					<form action="guide.php" method="POST">
						<label for="resi"><b>City of Residence:</b> </label>
						<input id="resi" type="text" name="resi"  required><br /> <br />
						<label for=""><b>Primary Language:</b> </label><br />
						<select name="plang" required>
						<option value="English"> English</option>
						<option value="Hindi">Hindi</option>
						<option value="Marathi">Marathi</option>
						</select><br /> <br />
						<label for="experience"><b>Tour Guide Experience in years:</b><label >
						<input id="experience" type="number" name="experience" min="0"  required><br /> <br />
						<label for="desc"><b>Add a Description about youself:</b> </label><br />
						<textarea id="desc" name="desc" cols="100" rows="5"></textarea> <br /> <br />
						<label for="cert"><b>Do you have a profesional license certificate:</b> </label>
						<input id="cert" type="radio" name="cert" readonly value="yes">Yes
						<input id="cert" type="radio" name="cert" readonly value="no">No<br /> <br />
						<button class="tgsubmit" id="tgsubmit" name="tgsubmit" type="submit" >Submit</button>
					</form>
				</div>
			</div>
			<?php include("footer.php"); ?>
		</div>  <!--content end-->
	</body>
	<?php 
	if(isset($_POST['tgsubmit']))
	{
	$loginname=	$_SESSION['loginname'];
	$resi =$_POST['resi'];
	$plang=$_POST['plang'];
	$experience=$_POST['experience'];
	$desc=$_POST['desc'];
	$cert=$_POST['cert'];
	$s1="INSERT INTO tourguideregistration(email,residence,primary_lang,year_of_experience,description,cert)VALUES('".$loginname."','".$resi."','".$plang."','".$experience."','".$desc."','".$cert."') ";
	mysql_query($s1) or die (mysql_error($conn));
	//header("location:guide.php");
	echo "<script> alert('Your form has successfully submitted. Now kindly wait for email. ');</script>";
	}
	?>		
<!--for fixed navbar2-->
<script>
<!--responsive navbar-->
function myFunction2() {
  var x = document.getElementById("mynavbar2");
  if (x.className === "navbar2") {
    x.className += " responsive";
  } else {
    x.className = "navbar2";
  }
}

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

//sub navigation
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


//overlay
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

//modal form
var modal = document.getElementById('id01');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//modal form1
var modal1 = document.getElementById('id02');
window.onclick = function(event1) {
  if (event1.target == modal1) {
    modal1.style.display = "none";
  }
}

//date
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
</script>
</html>