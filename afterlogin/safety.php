<!DOCTYPE html>
<html>
	<head>
		<title>Tourist Guide</title>
		<link rel="stylesheet" href="css/safety.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="content">  <!--content start-->
			<h1 style="font-size:40px;padding-left: 30px;">Safety Tips</h1><hr>
			<div><img src="images/safety1.jpg" class="mumimg" height="400px" width="60%"> </img></div>
			<div class="tips">
				<p >While it certainly is the ‘City of Dreams’, Mumbai is also a complex, bustling metropolis with a distinct way of life. Visitors may take a while to get used to the city and not be intimidated by its hectic atmosphere. We have compiled this list of ten safety tips for you to make the most of your Mumbai visit, while not risking your health or safety.</p> <br />
				<p><h2>Super crowded trains</h2>
				<img src="images/safety2.jpg" class="mumimg" width="55%"> </img><br />
				Mumbai’s trains are overwhelming, even for locals. They’re severely overcrowded – to the point that a term, ‘super dense crush load’ has been coined to specifically describe how crowded they get. Tourists are generally advised to avoid traveling on the trains during peak hours. If you have a little extra cash to dish out, buy first class tickets instead of the regular ones to access the relatively less crowded and much airier first class compartments. If you are a woman, you may find the exclusively women’s compartment more comfortable, particularly during busy hours.</p><br />
				<p><h2>Pickpockets</h2>
				The city has its fair share of pickpockets. Be wary of your personal belongings when in crowded areas – particularly the city’s bustling bazaars and crowded trains. You are encouraged to wear your backpack such that its contents are in front of you and not behind – as you’ll see most locals do during rush hour.</p><br />
				<p><h2>Cabs</h2>
				<img src="images/safety3.jpg" class="mumimg" width="55%"> </img><br />
				South Mumbai’s black and white taxi cabs are almost always metered, unlike autos elsewhere in the city. While most drivers will charge you exactly what the meter reading says and sometimes even forgive you if are short by some change, make sure to check you’re not hopping into an unmetered cab. If so, make sure to negotiate the price. Also, be wary if your cab has additional passengers besides the driver – unless your cab is a shared one.</p><br />
				<p><h2>Negotiating prices</h2>
				If you are a foreigner, be prepared for vendors at the city’s street side stalls and bazaars to throw exorbitant prices at you – sometimes even for the fun of a good bargain. You are encouraged to negotiate the best you can without insulting vendors. You can always check with a fellow local customer to see if you’re being unreasonably charged.</p><br />
				<p><h2>Traveling at night</h2>
				<img src="images/safety4.jpg" class="mumimg" width="55%"> </img><br />
				While Mumbai truly is India’s city that never sleeps, parts of the city may seem hostile to outsiders after dusk. Women are particularly advised to be careful while traveling in the city at night – though you will see female Mumbaikars traveling alone at night, they are likely much more familiar with the city, its neighborhoods and circumstances. If you are a tourist traveling the city at night, particularly a single woman, stick to the crowded, touristy areas, take precautions and be alert.</p><br />
				<p><h2>Monsoons</h2>
				Mumbai’s dramatic monsoons come with much need for caution. On one hand, there are train delays, traffic congestion issues and flooded roads. Then there are the spread of various seasonal diseases. Mosquitoes breed at an alarming rate during the monsoons, and diseases such as malaria and dengue fever become quite common. Make sure to wear a mosquito repellent and stay cautious.</p><br />
				<p><h2>Staying alert</h2>
				As is true for any other city, it helps to be a little wary of people’s intentions if they’re overly inquisitive or friendly. Don’t give out personal details or reveal very specific information about your travel plans. Stay alert and you should be fine.</p><br />
				<p><h2>Street food</h2>
				<img src="images/safety5.jpg" class="mumimg" width="55%"> </img><br />
				Be careful while indulging in street food, particularly if you have a sensitive stomach. As tempting as they may be, chances are they will upset your gut. As one can imagine, street food isn’t always prepared in the most sanitary conditions – which is why even locals don’t always indulge.</p><br />
				<p><h2>Water</h2>
				When it comes to drinking water, stick to bottled water. Make sure the packaging is intact and that the seal hasn’t been broken. Water at smaller restaurants isn’t always sanitary. While the case is particularly true during monsoons and summer, you are advised to stay wary throughout the year.</p><br />
				<p><h2>Heat</h2>
				Mumbai can get really hot during the summer. Make sure to use sunscreen, stay hydrated and avoid being out in the open for too long.</p><br />
				<div><h3>You should keep the emergency numbers handy while you are travelling in India.</h3>
					<ul><li>100 - Police control room</li>
					<li>1091 - Women help line (works across India)</li>
					<li>181 - Women help line ( Supposed to work across India)</li>
					<li>108 - Emergency help line</li>
					<li>103 - Women safety helpline (Mumbai only)</li></ul>
				</div>
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