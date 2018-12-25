<html>
<head>
	<title>Restaurents & Bars</title>
	<link rel="icon" href="../images/title/logo.png">
	<link href="../css/restaurent.css" rel="stylesheet" type="text/css">
	<link href="../css/slider-css.css" rel="stylesheet" type="text/css">
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
		<h2>Dunhill Restaurent</h2>
		<p>
			The multi-cuisine buffet restaurant offers patrons a pleasing choice of Bengali, Indian, Thai and Continental delicacies which are a gourmet's delight.
		</p>
	</div>


<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-top" src="../images/restaurent/image1.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="../images/restaurent/image2.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="../images/restaurent/image3.jpg" style="width:100%">
  
</div>
<hr><hr>





<div>
	<h2>Quinox Restaurent</h2>
	<p>
		A Conjure of Ocean & Mountain view Roof top Restaurant it has an idyllic setting with the Garden on one side and a bird's eye view of the Ocean on the other. It is a fusion Barbeque restaurant serving traditional delicacies. Chef has ensured that vegetarians too have their choice of grilled delicacies.
	</p>
</div>




<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-top" src="../images/restaurent/image4.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="../images/restaurent/image5.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="../images/restaurent/image6.jpg" style="width:100%">
  
</div>
<hr><hr>






<div>
	<h2>Pirates Den Bar</h2>
	<p>
		When you go out, you are looking to kick back, have a good time and relax. At Pirates Den, it's about you and your experience. It is the only Bar in Cox's Bazar with such a breathtaking view of the ocean, as well as a few tables in its open air terrace.
	</p>
</div>


<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-top" src="../images/restaurent/image6.jpg" style="width:100%">
  <img class="mySlides w3-animate-bottom" src="../images/restaurent/image9.jpg" style="width:100%">
  <img class="mySlides w3-animate-top" src="../images/restaurent/image10.jpg" style="width:100%">
</div>
<hr><hr>






<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>
