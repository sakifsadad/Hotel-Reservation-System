
<?php
		$dynamicList="";
if(isset($_GET['room_no']))
		{
			require 'connect_to_mysql.php';
			$room_no=$_GET['room_no'];
			
			$query2="SELECT * FROM boarder_info WHERE room_no='".$room_no."'";
			$run_query=mysql_query($query2);
			
			while($rows=mysql_fetch_array($run_query))
			{
				$name = $rows['name'];
				$customer_id = $rows['customer_id'];
				$village = $rows['village'];
				$district = $rows['district'];
				$phone = $rows['phone'];
				$id_proof = $rows['id_proof'];
				$room_no = $rows['room_no'];
				$no_of_days = $rows['no_of_days'];
				
			}

			
			$dynamicList= '<br><center><span id="heading">Customer Details in Room No '.$room_no.'</span></center>
					<table id="main_table" width="658" height="348" border="0" align="center" cellpadding="3" cellspacing="5">
					<tr class="odd">
					  <td width="160">Customer ID</td>
					  <td width="424">'.$customer_id.'</td>
					</tr>
					  <tr>
						<td>Customer Name</td>
						<td>'.$name.'</td>
					  </tr>
					  <tr class="odd">
						<td>Village</td>
						<td>'.$village.'</td>
					  </tr>
					  <tr>
						<td>District</td>
						<td>'.$district.'</td>
					  </tr>
					  <tr class="odd">
						<td>Phone No</td>
						<td>'.$phone.'</td>
					  </tr>
					  <tr class="odd">
						<td>ID proof</td>
						<td>'.$id_proof.'</td>
					  </tr>
					  <tr>
						<td>Room No</td>
						<td>'.$room_no.'</td>
					  </tr>
					  <tr class="odd">
						<td>No of Days</td>
						<td>'.$no_of_days.'</td>
					  </tr>
					  
					</table>';

			
			
		}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<div id="footer"><center>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Room Details</title>

<!-- <link href="style_admin.css" rel="stylesheet" media="screen" type="text/css" />
 --><style>
	#main_table		{
					background-color: white;
					border-collapse:collapse;
					border:thin #999999 solid;
					margin-top:15px;
					box-shadow: 0px 10px 8px -5px #8C8C8C;

						
				}
					
#main_table td	{
					padding:2px 5px 2px 20px;
				}
						
.odd			{
					background-color:orange;
				}

	
		
#heading		{
					background-color:#006B9F; 
					padding:5px 270px 5px 270px; 
					color:#FFFFFF;
					box-shadow: 0px 10px 8px -5px #8C8C8C;
					font-weight:lighter;
				}
.background{
	background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(../images/index2/adminview.jpg);
	height:95vh;
	background-size: cover;
	background-position: center;
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


</style>
</head>

<body>
	<div class="background">
		<center>
				<ul class="main-nav" style="font-size: 11px;">
					<li class="active"><a href="room.php">Back</a></li>
				</ul>
		</center>
	<div id="wrapper">
 		<?php include 'admin_header.php';?>

  	<div id="content">
     <?php echo $dynamicList; ?>
  	</div>
        
  
  

    
    </div>
</div>

</body>
</html>
