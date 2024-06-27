<?php
require('connect.php');

if(isset($_POST['update'])){
	$id=$_POST['Id'];
	$name=$_POST['name'];
	$phone= $_POST['phone'];
	$time = $_POST['time'];
	$date = $_POST['date'];
	$people =$_POST['people'];
	
$query = "update booking set name='".$name."', phone='".$phone."', time='".$time."', date='".$date."', people='".$people."' where Id='".$id."'";
	
	
	$update = $conn->query($query) or die ($conn->error.__LINE__);
	
	if($update){
		header("location:booking_data.php");
	}else{
		echo "not updated";
	}
}
?>
