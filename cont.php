<?php 
require("connect.php"); 
if($_POST['submit']){
 $name = $_POST['uname'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $date = $_POST['date'];
 $currentdate=$_POST['curdate'];
 $event = $_POST['event'];
 $feedback = $_POST['comment'];
	}
 echo $query="insert into cont(`Name`, `Address`,`Email`,`Telephone`,`EventDate`,`Currentdate`, `Event`,`Comments`)
 values('".$name."','".$address."','".$email."','".$number."','".$date."','".$currentdate."','".$event."','".$feedback."')";
$creatTable = mysqli_query($conn, $query);

if($creatTable){
	
header("location:contact.php");
}
else{
echo "not success";}
?>