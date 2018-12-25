



<?php
require 'connect_to_mysql.php';		//to connect to  mysql database alert($(this).find(\'td:first\').text())


//Run a select query to get latest 6 products
$dynamicList="";
$link="";
$sql=mysql_query("SELECT r_number,avilable,type,charge from room_number,room_class WHERE r_class=class_id order by(type)");
$roomCount=mysql_num_rows($sql);
if($roomCount>0)
{	$dynamicList.='<center><table  id="room_tab" width="590" height="199" border="1" cellpadding="3" cellspacing="0">
				<tr>
				<th width="156">Room No</th>
				<th width="156">Status</th>
				<th width="222">Type</th>
				<th width="174">Charge per day</th>
				</tr>';
	while($row=mysql_fetch_array($sql))
	{
		$room_no=$row["r_number"];
		$status=$row["avilable"];
		if($status=='n')
		{
			$link='<td align="center" style="background-color:#990000;" class="book"><a href="room_details.php?room_no='.$room_no.'">'.$room_no.'</a></td>';
		}
		else
		{
			$link='<td align="center">'.$room_no.'</td>';
		}
		$room_type=$row["type"];
		$charge=$row["charge"];
		$dynamicList.='<tr class="'.$room_type.'">'.$link.'
						<td align="center">'.$status.'</td>

						<td align="center">'.$room_type.'</td>
						<td align="center">Taka. '.$charge.'</td>
					   </tr>';

	}
	$dynamicList.='</table></center>';
}
else{
	$dynamicList="No Avilable room";
	}




	mysql_close();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- <div id="footer"><center>
	                <tbody>
                    <tr>
                      <td>
                        <a href="index2.php">Back to Home</a>
                      </td>
					  </tbody>
        <center><b></b></center>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
<title>Room</title>
<link rel="icon" href="../images/title/logo.png">



<link href="buttn_styler.css" rel="stylesheet" media="screen" type="text/css" />
<style>


	.delux			{
					background-color:#00FF66;
				}

.double			{
					background-color:#99F0EE;


				}

.single			{
					background-color:#EFC8C7;
				}

.vip			{
					background-color:#E1A9F3;
				}

.book a		{
					color:#FFFFFF;
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
	color:black;
	text-decoration: none;
	padding: 5px 15px;
	font-family: "Roboto", sens-serif;
	font-size: 20px;
}

.main-nav li.active a
{
	border: 2px solid black;
}

.main-nav li a:hover
{
	border: 2px solid white;
}
	






</style>

</head>
<div id="header">

    <div id="header_holder">
        
<body>
	<div class="background" style="background-color: orange;">
			<center>
				<ul class="main-nav" style="font-size: 11px;">
				<li class="active"><a href="index2.php">Home</a></li>
			</ul>
		</center>
	<div id="wrapper">
 		<?php include 'admin_header.php';?>

  	<div id="content">
    <br />
     <?php echo $dynamicList; ?>
  	</div>



 
	
        <br>
        <div id="ajax_data"></div>
    </div>

    </div>

</body>
</html>
