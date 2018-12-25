

<?php
		//wellcome message to the customer
		require 'connect_to_mysql.php';		//to connect to  mysql database
		
		if(isset($_GET['success']) && !empty($_GET['success']))
		{
			$name=$_GET['name'];
			$phone=$_GET['phone'];
			$room=$_GET['room_no'];
			$stay=$_GET['no_of_days'];
			
			
			$sql=mysql_query("SELECT customer_id from boarder_info WHERE phone='".$_GET['phone']."'"); 
			$count=mysql_num_rows($sql);
				if($count>0)
				{	
					while($row=mysql_fetch_array($sql))
					{
						$customer_id=$row["customer_id"];
					}
				}
			
			$dynamic_message='<table width="619" height="282" border="0" align="center" cellpadding="3" cellspacing="6" bgcolor="#FFFFFF">
						<tr>
						  <td width="125" align="center"><span class="style1">Customer ID:</span></td>
						  <td width="464" align="left">'.$customer_id.'</td>
						</tr>
						<tr>
						  <td align="center"><span class="style1">Customer Name:</span></td>
						  <td align="left">'.$name.'</td>
						</tr>
						<tr>
						  <td align="center"><span class="style1">Phone no:</span></td>
						  <td align="left">'.$phone.'</td>
						</tr>
						<tr>
						  <td align="center"><span class="style1">Room no:</span></td>
						  <td align="left">'.$room.'</td>
						</tr>
						<tr>
						  <td align="center"><span class="style1">No of days:</span></td>
						  <td align="left">'.$stay.'</td>
						</tr>
						
					  </table>';
		}
?>

<!DOCTYPE html>
<html>
<head>

<title>Generate Bill</title>
<link rel="icon" href="../images/title/logo.png">

<link href="style_admin.css" rel="stylesheet" media="screen" type="text/css" />
<link href="buttn_styler.css" rel="stylesheet" media="screen" type="text/css" />
<script src="jquery-1.11.0.min.js"></script>

<script>
</script>

<style type="text/css">

.style1 {font-size: small}

table	{
			box-shadow: 0px 10px 8px -5px #8C8C8C;
			border:thin #909090 solid;

		}
		
#customer	{
				font-weight:lighter;
				background-color: orange;
			}
		
#heading		{
					background-color:#006B9F; 
					padding:5px 150px 5px 150px; 
					color:#FFFFFF;
					box-shadow: 0px 10px 8px -5px #8C8C8C;
				}

</style>
</head>

<body>
<div id="wrapper">
 	<?php include 'admin_header.php';?>

  <div id="content">
  <br>
      <div id="customer">
		<center><span id="heading">Registration Sucessfull Wellcome <?php echo $name ?></span></center>
      	 <br>
             <?php echo $dynamic_message; ?>

      </div>

  </div>

</div>
</body>
</html>

