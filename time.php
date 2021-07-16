<!DOCTYPE html>
<html>
<head>
<title>
</title>

<link rel="stylesheet" href="css/time.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<?php include("header.php"); ?>

<div class="content">  <!--content start-->

<div>
<a class="weatherwidget-io" href="https://forecast7.com/en/19d0872d88/mumbai/" data-label_1="MUMBAI" data-label_2="WEATHER" data-theme="sky" data-basecolor="rgba(4, 120, 160, 0.84)" data-cloudfill="#01384c" >MUMBAI WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</div>

<div>
<img src="images/weather.jpg" class="mumimg" height="400px" width="100%" alt=""> </img>
</div>

<div class="best">
<h2>What is the best time to visit Mumbai?</h2>
The best time to visit Mumbai is from October to February. Mumbai receives copious rainfall during the monsoon. The city springs to life, with greenery everywhere. It is a good time for rain lovers to visit the city, have some local snacks and get drenched in the rains of Mumbai. Monsoon is the ideal time for taking a trek on the surrounding hills, because they look their greenest, with amazing waterfalls gushing down. Summer is not a good time to visit Mumbai because it is too hot and humid. During winter, the weather is pleasant, that is, it is neither too hot nor does the city receive incessant rainfall. Therefore, it is the ideal time to travel to Mumbai.<br />

<h3 class="accordion"> Mumbai in Winter(October-February)</h3>
<div class="panel">
<img src="images/winter.jpg" class="monsoonimg" height="200px" width="30%" alt="mumbai monsoon" align="left"> </img>
Winter is the best time to visit Mumbai. October is an ideal month for visiting the city because the weather is pleasant for sightseeing and outdoor activities. The grandeur during Christmas and New Year is worth watching. Besides, it is a great time for art lovers to visit Mumbai because Asia's Largest Cultural Festival, Mood Indigo, sponsored by IIT Bombay is held around this time. Mumbai's winter does not require you to pack sweaters and boots.
<br /><br /> You can do away with regular clothes because the temperatures do not fall below 20 degrees. After the humid months, winter is a welcoming change. You can head to Marine Drive to feel the cool breeze and watch the city skyline. You can visit the major monuments and attractions in the city. Winter is a good time to rent a bicycle and explore the Sanjay Gandhi Park, without the heat bogging you down. <br />
</div>

<h3  class="accordion"> Mumbai in Monsoon(June-September)</h3>
<div class="panel">
<img src="images/monsoon.jpg" class="monsoonimg" height="250px" width="40%" alt="mumbai monsoon" align="right"> </img>
When people from Mumbai talk about their city, they never forget to mention the rains of Mumbai. Monsoon brings heavy rainfall in Mumbai. The showers are unpredictable and usually, begin from June. The weather continues to be humid, and the showers increase gradually. July is the wettest month. By September, the rains almost cease. <br /><br />

It is highly inconvenient to travel to Mumbai during the monsoon, but if you want to enjoy the greenery and magic of nature, you can go during the rainy season as well. The rains in Mumbai result in jam-packed roads, so you cannot explore all the places. <br /><br /> 

But you can enjoy other activities. You can head to Marine drive and watch the waves while sipping a cup of cutting chai with some pakoras. The view is splendid because the sea completely drenches it. The sea roars with high tides. When you do visit the sea during monsoons, stay far from the waves. You can make a plan for a romantic day out with your partner to the Seaface at Worli, find a cosy shade and enjoy the rain together. <br /><br />

Taking a ferry ride to Gateway of India is a great way to spend a rainy day because the monument looks beautiful with clouds all over it. It is an absolute paradise for photographers. September is a great time to be in Mumbai because the entire city is decked up to celebrate Ganesh Chaturthi which is the trademark festival of Mumbai.<br />
</div>

<h3  class="accordion"> Mumbai in Summer(March-May)</h3>
<div class="panel">
<img src="images/summer.jpg" class="summer" height="270px" width="40%" alt="mumbai summer" align="left"> </img>
Visiting Mumbai during summers must be avoided on account of heat and humidity because of its proximity to the sea, Mumbai experiences a coastal climate. The temperatures do not rise that much and hover around 30-35 degrees. But, the humidity is high, and it causes a great deal of sweating which makes local sightseeing unpleasant. If you are a budget traveller and can put up with the humidity, you might get good deals during summer. However, visiting Mumbai during May can be unpleasant because the weather is harsh. <br /><br />
Summer is the right time to try out all the water activities in Mumbai and drive to the nearby towns like Lonavala and Khandala as well. It is breezy during the evenings and cooler at nights so that one can cover a few destinations. To keep away from the scorching summer heat, one can spend the day at the Essel World which is a popular fun zone in Mumbai. One can indulge in the local 'chuskis' or 'golas' during summers, which are incredibly satisfying and take you back to your childhood. <br /><br />

Another activity for summer is going for a pool party. C'est la vie hosts a lot of pool parties in summer, where one can chill out and relax. Nothing is more refreshing than watching the sunsets by the sea. One can visit the Bandra Bandstand and watch the beautiful sundown and feel the evening breeze. A leisure walk on the Marine drive with friends or family is also an excellent activity for summer time. You can also head to beaches for the various water sports.<br />
</div>
</div>

</div>  <!--mumtour end-->




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

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
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