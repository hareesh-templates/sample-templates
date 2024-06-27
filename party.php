<?php 
require("connect.php"); 
if($_POST['submit']){
 $name = $_POST['uname'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $date = $_POST['date'];
	 $currentdate=$_POST['curdate'];
 $party = $_POST['party'];
 $plan = $_POST['Plan'];
 $budget = $_POST['budget'];
 $feedback = $_POST['comment'];
		 
}
 echo $query="insert into party(`Name`, `Address`,`Email`,`Telephone`,`EventDate`, `Currentdate`,`PartyType`,`Location`,`Budget`,`Feedback`)
 values('".$name."','".$address."','".$email."','".$number."','".$date."','".$currentdate."','".$party."','".$plan."','".$budget."','".$feedback."')";
$creatTable = mysqli_query($conn, $query);

if($creatTable){
	
header("location:parties.php");
}
else{
echo "not success";}
?>


