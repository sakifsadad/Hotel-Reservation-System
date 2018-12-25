<html>
<head>
	<title>Homepage</title>
	<link rel="icon" href="../images/title/logo.png">
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/slider-css.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<header>


		<div class="row">
			<div class="text">
				<b class="name-font">Intourist Palace</b>
			</div>

			<ul class="main-nav" style="font-size: 11px;">
				<li class="active"><a href="homepage.php">Home</a></li>
				<li class="active"><a href="rooms and suites.php">Rooms & Suites</a></li>
				<li class="active"><a href="restaurent.php">Restaurents & Bars</a></li>
				<li class="active"><a href="meeting.php">Meetings & Events</a></li>
				<li class="active"><a href="facilities.php">Facilities & Services</a></li>
				<li class="active"><a href="reservation.php">Reservation</a></li>
				<li class="active"><a href="specialoffers.php">Special Offers</a></li>
				<li class="active"><a href="contactus.php">Contact Us</a></li>
			</ul>


			<div>
				<h1 class="custom-header-text">BORN IN ERA OF GLAMOROUS TRAVEL , INTOURIST PALACE BELIEVES EVERYONE SHOULD EXPLORE THE WORLD IN STYLE</h1>
			</div>


	</header>

	<div>
	<h2>LIVE THE INTOURIST PALACE LIFE</h2>
	<p>
		As the world’s first international luxury hotel brand, Intourist Palace Hotel has been pioneering travel across the globe for more than 70 years. We’re proud to share both international know-how and local cultural wisdom with our guests at every one of our hotels — from historic buildings to city landmarks and immersive resorts.
	</p>
	<hr>
	</div>
	<div>
		<h3>A WORLD OF INSPIRATION</h3>
	</div>









<div class="w3-content w3-display-container">
  <img class="mySlides" src="../images/homepage/slide1.jpg" style="width:100%">
  <img class="mySlides" src="../images/homepage/slide2.jpg" style="width:100%">
  <img class="mySlides" src="../images/homepage/slide3.jpg" style="width:100%">
  <img class="mySlides" src="../images/homepage/slide4.jpg" style="width:100%">
  <img class="mySlides" src="../images/homepage/slide5.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<hr>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>




<div>
	<h4>ELEVATE YOUR EXPERIENCE</h4>

</div>
<center>
<div class="row">
  <div class="column">
    <img src="../images/1.jpg ">
  </div>
  <div class="column">
    <img src="../images/8.jpg">
  </div>
</div>
</center>


<div>
	<h5>MEETINGS AND EVENTS TERRACE</h5>
	<p class="text">Intourist palace combines personal service and exclusive privileges to make your stay extra special. For world-class service and unique details, book Intourist's Mettings & Events Terrace .</p>
</div>
<div>
	<a href="reservation.php">
	<button class="button">Book Now</button>
</a>
</div>	


<div class="note">Admin</div>


<div class="image">
	<a href="login.php">
	<img src="../images/homepage/admin.png">
</a>
</div>






</body>






</html>