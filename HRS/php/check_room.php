<?php
require 'connect_to_mysql.php';		//to connect to  mysql database alert($(this).find(\'td:first\').text())

if(isset($_POST['msg']))
{
$dynamicList="";
$sql=mysql_query("SELECT r_number,type,charge FROM room_number,room_class WHERE r_class=class_id and avilable='y' order by(type)"); 
$roomCount=mysql_num_rows($sql);
if($roomCount>0)
{	$dynamicList.='<center><table  id="room_tab" width="590" height="199" border="1" cellpadding="3" cellspacing="0">
				<tr>
				<th width="156">Room No</td>
				<th width="222">Type</td>
				<th width="174">Charge per day</td>
				</tr>';
	while($row=mysql_fetch_array($sql))
	{
		$room_no=$row["r_number"];
		$room_type=$row["type"];
		$charge=$row["charge"];
		$dynamicList.='<tr class="'.$room_type.' room">
						<td align="center">'.$room_no.'</td>
						<td align="center">'.$room_type.'</td>
						<td align="center">Taka. '.$charge.'</td>
					   </tr>';
					   //onClick="alert($(this).find(\'td:first\').text())"
					  
	}
	$dynamicList.='</table></center>';
}
else{
	$dynamicList="No Avilable room";
	}
	
	echo $dynamicList;
	
}
	mysql_close();
?>





