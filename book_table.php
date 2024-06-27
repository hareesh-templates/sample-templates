<?php
require("connect.php");

if($_POST['submit']){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$message = $_POST['message'];
		
}	
  $query = "insert into book_table(name,email,phone_number,date,time,message) 
 values('".$name."','".$email."', '".$phone_number."','".$date."','".$time."','".$message."')";
$creat = mysqli_query($conn, $query);

	?>