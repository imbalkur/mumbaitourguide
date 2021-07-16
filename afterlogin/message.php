<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tourist Guide</title>
		<link rel="stylesheet" href="css/profile.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		.message{
			padding-left: 50px;
			background-color: #f0f0f5;
		}</style>
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="content">  <!--content start-->
		<h2>Message</h2>
		<div class="message"><br />
				<h1><?php
					if(isset($_SESSION['loginname'])){
					$login=$_SESSION['loginname'];
					$query= "select * from reply where email='$login' ";
					$result= mysql_query($query);
					while($rows=mysql_fetch_assoc($result)){//echo "Name: &nbsp&nbsp"; 
					echo "Subject:<br  />";echo $rows['subject']; echo "&nbsp ";  echo "<br  /><br  />";
					echo "Message:<br  />";echo $rows['message'];  echo "<br  />"; echo "<br  /><br  />";
					}}?>
				</h1>
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