<?php

$mysqli = new mysqli('localhost','root','','appointment') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){

	$Cname = $_POST['cname'];
	$Email = $_POST['email'];
	$Mnumber = $_POST['mnumber'];
	$Dname = $_POST['dname'];

	$date = $_POST['date'];
	$result=explode('-',$date);
	$date=$result[2];
	$month=$result[1];
	$year=$result[0];
	$new=$year.'-'.$month.'-'.$date;

	$time = $_POST['time'];
	

	$mysqli->query("INSERT INTO appointment_data (customer_name,email,mobile,doctor_name,date,time) VALUES('$Cname','$Email','$Mnumber','$Dname','$new','$time')") 
	or die($mysqli->error);



}

?>
