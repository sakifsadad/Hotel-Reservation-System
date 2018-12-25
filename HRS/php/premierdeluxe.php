<html>
<head>
	<title>Premier Deluxe</title>
	<link rel="icon" href="../images/title/logo.png">
	<link href="../css/rooms.css" rel="stylesheet" type="text/css">
	<link href="../css/image-slider.css" rel="stylesheet" type="text/css">

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
				<h2>Rooms & Suites</h2><hr>
			</div>

	<div >
			<h3>Premier Deluxe</h3><br>
	</div>




<div>

<div class="w3-content" style="max-width:700px">
  <img class="mySlides" src="../images/premierdeluxe/slide1.jpg" style="width:100%">
  <img class="mySlides" src="../images/premierdeluxe/slide2.jpg" style="width:100%">
  <img class="mySlides" src="../images/premierdeluxe/slide3.jpg" style="width:100%">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/premierdeluxe/slide1.jpg" style="width:100%" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/premierdeluxe/slide2.jpg" style="width:100%" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/premierdeluxe/slide3.jpg" style="width:100%" onclick="currentDiv(3)">
    </div>
  </div>

</div>

<hr>
</div>

<div class="Details">
	<h5><b>Room Details:</b></h5><br>
	<p>Size: 420 sq.ft(With sea view) <br>
	Beds: King or Twin Size<br>
	Guests: Up to 2<br>
	<b>BDT:11,000/Night</b>
	</p>
</div><hr>

<div>
	<div class="Specifications-text"><b>Room-Features</b></div>
<div class="text1">
		<p>> Air Conditioning</p><hr>
		<p>> LED TV</p><hr>
		<p>> Boadband Internet</p><hr>
		<p>> Personal Safe</p><hr>
		<p>> Writing Table</p><hr>
		<p>> Shaver Point</p><hr>
		<p>> Minibar</p><hr>
		<p>> Refrigerator</p><hr>
	</div>
	<div class="text2">
		<p>> Hairdryer</p><hr>
		<p>> Electric Cattle</p><hr>
		<p>> Slippers</p><hr>
		<p>> Fire Sprinklers</p><hr>
		<p>> Toilet Telephone</p><hr>
		<p>> Weight Scale</p><hr>
		<p>> Microwave Oven</p><hr>

		
	</div>

</div>































 <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off"; 
}
</script>


			
</body>
</html>