<!DOCTYPE html>
<html>
	<head>
		<title>Tourist Guide</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/home1.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="content">  <!--content start-->
		<div><img src="images/mumbai.jpg" class="mumimg" height="400px" width="100%" alt="Gateway of india and taj"> </img></div>
		<div class="mumtour"> <!--mumtour start-->
		<h1>Mumbai Tourism</h1>
		<p>Mumbai is a spectacular paradox of chaos and hope, glamor and squalor, modernity and tradition, old and new. Famously known as the City of Dreams, Mumbai – formerly known as Bombay – has a long colonial history, starting from Gandhi’s visits to the city to the intense protests against the Simon Commission in 1928, the city has stood witness to many important events in the country’s freedom struggle. Today, Mumbai is a beautifully blended melting pot of cultures and lifestyles. The city soaks in everything into its fabric, making it its very own. From European and Portuguese inhabitants who migrated years ago to the city, to upcoming actors struggling to make it big on the silver screen; from Bolly superstars to big industrialists to tribes of fisherman and slum dwellers, Mumbai is a city that proudly boasts of stories from different walks of human survival. <br /><br />
		One of the main centres in the country of art, culture, music, dance and theatre, Mumbai is a dynamic, cosmopolitan city that has been running for years solely on the indomitable spirit of the Mumbaikars.<br /><br />
		<span id="dots">...</span><span id="more">
		If you want to soak in some of the city's reminiscent colonial feeling, start by taking a walk around the streets of South Mumbai, which is basically old Bombay. South Mumbai is dotted with buildings that will make you feel like you've been transported back in time to the British era; the British influence on the architecture of buildings is very prominent in almost every building you come across.<br /><br />
		The most iconic tourist spot in Mumbai has to be the Gateway of India, and this awe-inspiring structure is located right on the waterfront overlooking the Arabian Sea. The majestic Taj Mahal Hotel, which is another famous Mumbai landmark, is directly opposite the Gateway of India, so you can spend an entire day at these two locations alone, immersing yourself in the marvellous history of this town replete in rich heritage.
		Since Mumbai is situated right beside the Arabian Sea, there are various promenades where you just sit back and relax and feel the breeze on your face. <br />
		<br />Marine Drive is one such promenade where you can sit with your feet dangling over the ledge, and enjoy a beautiful sunset against the backdrop of the roaring waves of the Arabian sea. When in Mumbai, don't forget to visit Bandra, which is home to most of the Bollywood stars, and is a laid-back suburb which houses many bars and nightclubs where you can experience the best of Mumbai's nightlife.<br /><br />
		Mumbai's local cuisine is a food lover's paradise, and the local street food comprising of items such as vada pav, pav bhaji, dahi puri, pani puri and kala khatta will pamper your taste buds without burning a hole in your pocket. Being a metropolis, Mumbai is a shopping haven, and there is pretty much nothing that you won't be able to find here. Street shopping in Mumbai is best experienced at Colaba Causeway and Linking Road, where you can buy everything from junk jewellery to shoes, bags and even fancy designer clothes.</span></p><button onclick="myFunction1()" id="myBtn1" class="read">Read more</button><br />
		</div>  <!--mumtour end-->
		<div class="contact" id="contact">
		<p class="headcontact">Contact Us</p>
		<form action="home1.php" method="POST" class="formcontact">
		<?php include('/connection.php'); if(isset($_SESSION['loginname'])) ?> 
			<input class="box" type="text" placeholder="Subject" required name="subject"><br /><br />
			<input class="box" type="text" placeholder="Comment" required name="comment"><br /><br />
			<button class="subbox" type="submit" name="submit"><i class="fa fa-paper-plane"></i> SEND MESSAGE</button>
		</form>
		<?php
			$conn = mysql_connect("localhost","root","") or die("No Connection");
			mysql_select_db("touristguide") or die("No Database");
			if(isset($_SESSION['loginname'])){
			$login=$_SESSION['loginname'];
			$query= "select * from register where email='$login' ";
			$result= mysql_query($query);
			while($rows=mysql_fetch_assoc($result)){
			//echo "Name: &nbsp&nbsp"; 
			if(isset($_POST['submit']))
			{$name=$rows['fname'];
			$email =$_SESSION['loginname'];
			$subject=$_POST['subject'];
			$comment=$_POST['comment'];
			$s1="INSERT INTO contact (name,email,subject,comment)VALUES('".$name."','".$email."','".$subject."','".$comment."') ";
			mysql_query($s1) or die (mysql_error($conn));
			echo "<script> alert('message sent successfully')</script>";
			} }}
		?>
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

<!--for read more/read less-->
function myFunction1() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>


</html>