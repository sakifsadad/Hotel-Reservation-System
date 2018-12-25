
<?php
	require 'connect_to_mysql.php';		//to connect to  mysql database

	$dynamic_table="";
	if(isset($_GET['customer_id']) && !empty($_GET['customer_id']))
	{
		$customer_id=mysql_real_escape_string($_GET['customer_id']);
		

$list="SELECT customer_id,name,phone,room_no,r_class,type,charge,no_of_days FROM boarder_info,room_number,room_class WHERE room_no=r_number AND r_class=class_id AND boarder_info.customer_id='".$customer_id."'";
		
		$sql= mysql_query($list);
		$count=mysql_num_rows($sql);		
		if($count>0)
		{
			while($rows=mysql_fetch_assoc($sql))
			{
				$customer_id = $rows['customer_id'];
				$name = $rows['name'];
				$phone = $rows['phone'];
				$room_no = $rows['room_no'];
				$r_class = $rows['r_class'];
				$type = $rows['type'];
				$charge = $rows['charge'];
				$no_of_days=$rows['no_of_days'];
				$total=$charge*$no_of_days;
			}
			
	$dynamic_table='<br><center><span class="heading">Billing Details</span></center>
					<table id="main_table" width="658" height="370" border="0" align="center" cellpadding="3" cellspacing="5">
					<tr>
						<td width="160">Customer ID</td>
					  <td width="424">'.$customer_id.'</td>
					</tr>
					  <tr>
						<td>Customer Name</td>
						<td>'.$name.'</td>
					  </tr>
					  <tr>
						<td>Phone No</td>
						<td>'.$phone.'</td>
					  </tr>
					
					  <tr>
						<td>Room No</td>
						<td>'.$room_no.'</td>
					  </tr>
					  <tr>
						<td>Room Class</td>
						<td>'.$r_class.'</td>
					  </tr>
					  <tr>
						<td>Room Type</td>
						<td>'.$type.'</td>
					  </tr>
					  <tr>
						<td>Charge per Day</td>
						<td>'.$charge.'</td>
					  </tr>
					  <tr>
						<td>No of Days</td>
						<td>'.$no_of_days.'</td>
					  </tr>
					  <tr>
						<td>Total Taka</td>
						<td>Taka. '.$total.'</td>
					  </tr>
					  
<tr>
<td>&nbsp;</td>
<td>

<button onMouseDown="javascript:check_out('.$customer_id.','.$room_no.')" 
onClick="document.getElementById(\'confirm\').style.display=\'block\'" class="button">
Check Out</button></td>

</tr>
</table>';



	
}
			else{
				
				$dynamic_table='<br><br><center><span class="error"> No Records found </span></center>';	
			}
		
		
	}
	else{
				
				$dynamic_table='<br><br><center><span class="error"> Please provide Customer ID </span></center>';	
		}

?>

<html>
<head>



<title>Checkout</title>
<link rel="icon" href="../images/title/logo.png">
<style>
	
#main_table		{
					background-color:orange;
					border-collapse:collapse;
					border:thin #DDDDDD solid;
					margin-top:15px;
					box-shadow: 0px 10px 8px -5px #8C8C8C;

						
				}
					
#main_table td	{
					padding:2px 5px 2px 20px;
				}
						
.error 			{
					background-color:#ECAEDB;
					padding:20px 80px 15px 80px;
					border:thin #990033 solid;
					border-radius:5px;
					font-weight:lighter;
					

				}	

#result			{
					height:400px;
				}		
		
.heading		{
					background-color:#006B9F; 
					padding:5px 270px 5px 270px; 
					color:#FFFFFF;
					box-shadow: 0px 10px 8px -5px #8C8C8C;
					font-weight:lighter;
				}
#confirm		{
					background-color:orange;
					display:none;
					padding:10px;
					width:750px;
					height:150px;
					position:absolute;
					top:460px;
					left:363px;
					font-weight:lighter;
					font-size:smaller;
					border:thin #999999 solid;
					box-shadow: 0px 0px 0px 450px rgba(2,2,3,0.333);

				}


.main-nav
{
	float:middle;
	list-style: none;
	margin-top: 40px;
	margin-left:0px;
}


.main-nav li
{
	display: inline-block;
	margin-top: 40px;
}

.main-nav li a
{
	color:white;
	text-decoration: none;
	padding: 5px 15px;
	font-family: "Roboto", sens-serif;
	font-size: 20px;
}

.main-nav li.active a
{
	border: 2px solid orange;
}

.main-nav li a:hover
{
	border: 2px solid white;
}
					

.bckgrnd{
			background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(../images/index2/adminview.jpg);
			height:100vh;
		background-size: cover;
		background-position: center;
					}
		
</style>




<!-- 
<link href="style_admin.css" rel="stylesheet" media="screen" type="text/css" />
<link href="buttn_styler.css" rel="stylesheet" media="screen" type="text/css" /> -->
<script src="jquery-1.11.0.min.js"></script>



<script language="javascript" type="text/javascript">

function check_out(id,rum_no)
	{
			//document.getElementById("results").style.display="none";
			$(document).ready(function(){
			$.get("checkout.php?customer_id="+id+"&room_no="+rum_no,
					function(data){$("#confirm_data").html(data).fadeIn();});
		
			});

	}
	
</script>

<script>
		$(document).ready(function(){
			$("#yes_button").click(function(){
				$("#confirm").fadeOut();
				document.getElementById("result").innerHTML="<br><center><span class=\"heading\">Thank you for staying with us</span></center><br>";
			  });
		})
</script>




</head>

<body>
<div class="bckgrnd">
	<center>
				<ul class="main-nav" style="font-size: 11px;">
				<li class="active"><a href="index2.php">Home</a></li>
			</ul>
		</center>

 	<?php include 'admin_header.php';?>

  
  <br>
      <table style=" border:thin #CACACA solid;" width="655" height="111" border="0" cellpadding="5" align="center" bgcolor="orange">
      <tr>
        <form method="get" action="bill.php">
        <td width="129" align="center">Customer ID</td>
        <td width="303"><input name="customer_id" type="text" size="40" class="text_box"></td>
        <td width="181"><input type="submit"  class="button" value="Search"></td>
        </form>
      </tr>
    </table>
    
<div id="result">
    	
        <?php echo $dynamic_table ?>
        
        <div id="confirm">
        
        <center><span>Thank you for staying with us</span></center><br><br>
        
        <div id="confirm_data">
        </div>
        
        <center>
        <br><br>
		<button class="button" id="yes_button">Confirm</button>
        </center>

        
        </div><br><br>

    </div>

    
  </div>
  


</body>
</html>

