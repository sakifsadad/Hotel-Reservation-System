<?php
//Error reporting
error_reporting(E_ALL);
ini_set('display_errors','1');
?>

<?php 
require 'connect_to_mysql.php';		//to connect to  mysql database

if(isset($_POST['phone']) && !empty($_POST['phone']))		//Checking whether the customer has provided phone no or not
if(isset($_POST['room_no']) && !empty($_POST['room_no']))		//Checking whether the room has booked or not
{
	$name= mysql_real_escape_string($_POST['name']);
	$date= mysql_real_escape_string($_POST['date']);
	$month= mysql_real_escape_string($_POST['month']);
	$year= mysql_real_escape_string($_POST['year']);
	$gender_info= mysql_real_escape_string($_POST['gender_info']);
	$nationality= mysql_real_escape_string($_POST['nationality']);
	$village= mysql_real_escape_string($_POST['village']);
	$post_office= mysql_real_escape_string($_POST['post_office']);
	$police_station= mysql_real_escape_string($_POST['police_station']);
	$district = mysql_real_escape_string($_POST['district']);
	$state= mysql_real_escape_string($_POST['state']);
	$pin_code= mysql_real_escape_string($_POST['pin_code']);
	$phone= mysql_real_escape_string($_POST['phone']);
	$e_mail= mysql_real_escape_string($_POST['e_mail']);
	$date1= mysql_real_escape_string($_POST['date1']);
	$month1= mysql_real_escape_string($_POST['month1']);
	$year1= mysql_real_escape_string($_POST['year1']);
	$id_proof= mysql_real_escape_string($_POST['id_proof']);
	$room_no= mysql_real_escape_string($_POST['room_no']);
	$no_of_days= mysql_real_escape_string($_POST['no_of_days']);
	
	$sql=mysql_query("SELECT customer_id FROM boarder_info WHERE phone=$phone");
	$sql=mysql_query("SELECT room_no FROM room_number WHERE room_no=$room_no");
	$count=mysql_num_rows($sql);
	echo $count.'<hr><br>';
	if($count>0)
	{
		echo'Sorry this phone number is already registered <a href="index2.php">click here</a>';
		exit();
	}
	else{
$insert="INSERT INTO boarder_info (`name`,`date`, `month`, `year`, `gender_info`, `nationality`, `village`, `post_office`, `police_station`, `district`, `state`, `pin_code`, `phone`, `e_mail`, `date1`, `month1`, `year1`, `id_proof`, `room_no`, `no_of_days`) VALUES ('$name','$date', '$month','$year','$gender_info','$nationality','$village','$post_office','$police_station','$district','$state','$pin_code','$phone','$e_mail','$date1','$month1','$year1','$id_proof','$room_no','$no_of_days')";
	
	$sql=mysql_query($insert) or die(mysql_error());
	if($sql)
	{
		$room_update = "UPDATE room_number SET avilable = 'n' WHERE r_number='".$room_no."'";	//update the room no as booked
		$sql=mysql_query($room_update) or die(mysql_error());
	}
	header("location: well_come.php?success=y&name=".$name."&phone=".$phone."&room_no=".$room_no."&no_of_days=".$no_of_days."");
	exit();
	}
}
else{
		echo 'Registration not successfull';
}
?>