<!DOCTYPE html>
<html>
	<head>
		<title>Tourist Guide</title>
		<link rel="stylesheet" href="css/map.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="content">  <!--content start-->
			<div>
				<h1>Mumbai Map</h1>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d241308.51671969405!2d72.7561963!3d19.0880991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1561292318237!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<?php include("footer.php"); ?>
		</div>  <!--content end-->
	</body>
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
</script>
</html>