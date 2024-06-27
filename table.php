<?php
require("connect.php");

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$time = $_POST['time'];
	$date = $_POST['date'];
	$people = $_POST['people'];
}	

$query = "select count(*) as bookings from booking where time = '".$time."' AND date='".$date."'";
$result1 = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result1) ;
$count1 = $row['bookings'];
if($count1 > 5)

{
	
echo "slot not available";	
	
}

else{
	
$query = "insert into booking(name,phone,time,date,people) values('".$name."','".$phone."','".$time."', '".$date."','".$people."')";
$creat = mysqli_query($conn, $query);
echo "booking confirmed";
	
}
?>