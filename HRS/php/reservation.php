<html>
<head>
	<title>Reservation</title>
	<link rel="icon" href="../images/title/logo.png">
	<link href="../css/reservation.css" rel="stylesheet" type="text/css">
	<script src="jquery-1.11.0.min.js"></script>
	<link href="style_admin.css" rel="stylesheet" media="screen" type="text/css" />
	<?php require 'connect_to_mysql.php'; ?>

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

	<div class="text1">
		<h2>Reservation</h2>
		<p>We would like to welcome you to Ocean Paradise Hotel and Resort at Cox's Bazar. Please fill in the following reservation form and send it to us.</p><br> <hr>
	</div>





<script language="javascript" type="text/javascript">
	
	function swapContent()
	{
		$(document).ready(function(){						//ajax code
		//var url="check_room.php";
		$.post("check_room.php",
		{msg:":Put ajax data here"},
			function(data){$("#ajax_data").html(data).fadeIn();
			event_handler();
		});
		
		});

	}

	function event_handler(){
		$('table#room_tab .room').click(function(){
				var num = $(this).find('td:first').text();
				$('#room_num').val(num);
				$("#ajax_div").fadeOut();
		});
	}
	
</script>

<script>
		$(document).ready(function(){
			$("#ajax_butn").click(function(){
				$("#ajax_div").fadeOut();
			  });
		})
</script>


<div id="wrapper">
 	<!-- <?php include 'admin_header.php';?> -->

  <div id="content">
  	<br><br>
    <center><span id="heading">Reservation</span></center>
    <table id="main_table" width="799" height="431" border="0" align="center" cellpadding="5" bgcolor="#FFFFFF">
            
<form id="reg_form" name="customer_reg" method="post" action="register.php">
              <tr>
                <td width="170">Name&nbsp;*</td>
                <td width="627">
                 
                    <input name="name" type="text" class="text_box" size="50" required/>                </td>
              </tr>
			   <tr>  
   <td>Date of birth:</td><td>
	                           <select name="date">
						        <option value="1">1 <option value="2">2 <option value="3">3 <option value="4">4 <option value="5">5 
								<option value="6">6 <option value="7">7 <option value="8">8 <option value="9">9 <option value="10">10 
								<option value="11">11 <option value="12">12 <option value="13">13 <option value="14">14 <option value="15">15 
								<option value="16">16 <option value="17">17 <option value="18">18 <option value="19">19 <option value="20">20 
								<option value="21">21 <option value="22">22 <option value="23">23 <option value="24">24 <option value="50">50 
								<option value="26">26 <option value="27">27 <option value="28">28 <option value="29">29 <option value="30">30 <option value="31">31 
								
					         </select>
							 <select name="month">
						        <option value="january">January <option value="february">February <option value="march">March <option value="april">April <option value="may">May 
								<option value="june">June <option value="july">July <option value="august">August <option value="september">September <option value="october">October 
								<option value="november">November <option value="december">December 
					         </select>
							   <select name="year">
							    <option value="1950">1950 <option value="1951">1951 <option value="1952">1952 <option value="1953">1953 <option value="1954">1954 
								<option value="1955">1955 <option value="1956">1956 <option value="1957">1957 <option value="1958">1958 <option value="1959">1959 
							    <option value="1960">1960 <option value="1961">1961 <option value="1962">1962 <option value="1963">1963 <option value="1964">1964 
								<option value="1965">1965 <option value="1966">1966 <option value="1967">1967 <option value="1968">1968 <option value="1969">1969 
							    <option value="1970">1970 <option value="1971">1971 <option value="1972">1972 <option value="1973">1973 <option value="1974">1974 
								<option value="1975">1975 <option value="1976">1976 <option value="1977">1977 <option value="1978">1978 <option value="1979">1979 
							    <option value="1980">1980 <option value="1981">1981 <option value="1982">1982 <option value="1983">1983 <option value="1984">1984 
								<option value="1985">1985 <option value="1986">1986 <option value="1987">1987 <option value="1988">1988 <option value="1989">1989 
						        <option value="1990">1990 <option value="1991">1991 <option value="1992">1992 <option value="1993">1993 <option value="1994">1994 
								<option value="1995">1995 <option value="1996">1996 <option value="1997">1997 <option value="1998">1998 <option value="1999">1999 
								<option value="2000">2000 
								
					         </select>
							
							 </td></tr>
			   <tr>
                <td>Gender Info&nbsp;*</td>
                <td>
                  <select name="gender_info" id="gender_info" class="text_box">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  </select>                </td>
              </tr>
			   <tr>
                <td width="170">Nationality&nbsp;*</td>
                <td width="627">
                 
                    <input name="nationality" type="text" class="text_box" size="50" required/>                </td>
              </tr>
			   <tr>
                <td width="170">Village&nbsp;*</td>
                <td width="627">
                 
                    <input name="village" type="text" class="text_box" size="50" required/>                </td>
              </tr>
			   <tr>
                <td width="170">Post Office&nbsp;*</td>
                <td width="627">
                 
                    <input name="post_office" type="text" class="text_box" size="50" required/>                </td>
              </tr>
			   <tr>
                <td width="170">Police Station&nbsp;*</td>
                <td width="627">
                 
                    <input name="police_station" type="text" class="text_box" size="50" required/>                </td>
              </tr>
			   <tr>
                <td width="170">District&nbsp;*</td>
                <td width="627">
                 
                    <input name="district" type="text" class="text_box" size="50" required/>                </td>
              </tr>
			   <tr>
                <td width="170">Division&nbsp;*</td>
                <td width="627">
                 
                    <input name="state" type="text" class="text_box" size="50" required/>                </td>
              </tr>
              <tr>
                <td>Pin Code&nbsp;*</td>
                <td>
                  <input name="pin_code" type="text" class="text_box" size="50" required/>                </td>
              </tr>
              <tr>
                <td>Phone&nbsp;*</td>
                <td>
                  <input name="phone" type="text" class="text_box" size="50" required/>                </td>
              </tr>
              <tr>
                <td>E Mail&nbsp;*</td>
                <td>
                  <input type="text" name="e_mail" class="text_box" size="50" required/>                </td>
              </tr>
              <tr>  
        <td>Booking Date:</td><td>
	                           <select name="date1">
						        <option value="1">1 <option value="2">2 <option value="3">3 <option value="4">4 <option value="5">5 
								<option value="6">6 <option value="7">7 <option value="8">8 <option value="9">9 <option value="10">10 
								<option value="11">11 <option value="12">12 <option value="13">13 <option value="14">14 <option value="15">15 
								<option value="16">16 <option value="17">17 <option value="18">18 <option value="19">19 <option value="20">20 
								<option value="21">21 <option value="22">22 <option value="23">23 <option value="24">24 <option value="50">50 
								<option value="26">26 <option value="27">27 <option value="28">28 <option value="29">29 <option value="30">30 <option value="31">31
					         </select>
							 <select name="month1">
						        <option value="january">January <option value="february">February <option value="march">March <option value="april">April <option value="may">May 
								<option value="june">June <option value="july">July <option value="august">August <option value="september">September <option value="october">October 
								<option value="november">November <option value="december">December 
					         </select>
							 <select name="year_from">
						     <option value="2016">2016 <option value="2017">2017 <option value="2018">2018 <option value="2019">2019 <option value="2020">2020 <option value="2021">2021 <option value="2022">2022 <option value="2023">2023 <option value="2024">2024 <option value="2025">2025
							</select>
						    </td></tr>
              <tr>
                <td>ID proof&nbsp;*</td>
                <td>
                  <select name="id_proof" id="id_proof" class="text_box">
                  <option value="dl">Driving licence</option>
                  <option value="pc">Passport</option>
                  <option value="vid">National ID Card</option>
                  
                  </select>                </td>
              </tr>
  
              <tr>
                <td>Room No&nbsp;*</td>
                <td>
                  <input type="text" name="room_no" class="text_box" id="room_num" readonly required />
                &nbsp;<button type="button" onMouseDown="javascript:swapContent()" onClick="document.getElementById('ajax_div').style.display='block'" class="button">check</button>                </td>
              </tr>
              <tr>
                <td>No Of Days&nbsp;*</td>
                <td>
                  <input type="text" name="no_of_days" class="text_box" required/>                </td>
              </tr>
              <tr align="center">
                <td height="71" colspan="2">
                  <input type="submit" name="submit" id="submit" value="Submit" class="button"/>
                 &nbsp;&nbsp;
                  <input type="reset" name="reset" id="reset" value="Reset" class="button"/>                </td>
        </tr>
      </form>
</table>
	
<div id="ajax_div">
    	<button type="button" id="ajax_butn" class="button" style="margin-left:550px;">close X</button>
        <center><b>Avilable Rooms</b></center>
        <br>
        <div id="ajax_data"></div>
    </div>
  

</body>


<div class="Policy">
	<h3>Policy On Booking</h3>
	<ul class="text">
		<li> Each room is entitled to 2 (Two) Complimentary Breakfast and any Children under 5 years </li><br>
		<li> Room Rates are based on Double Occupancy </li><br>
		<li> Rates are inclusive of 10% Service Charge and 15% VAT </li><br>
		<li> Connecting Rooms may be provided subject to availability </li><br>
		<li> Children under 5 years get complimentary stay with parents </li><br>
		<li> Retention charge applies in case of cancellation of guaranteed booking </li><br>
		<li> Kindly bring original deposit slip along with you at Check-in </li><br>
		<li> Early Check-in & Late Check-out depend on room availability, and charges apply </li><br>
	</ul>
</div>

  </div>
</div>
</html>