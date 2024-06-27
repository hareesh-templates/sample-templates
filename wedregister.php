<?php 
require("connect.php"); 
if($_POST['submit']){
 $name = $_POST['uname'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $number = $_POST['number'];
 $date = $_POST['date'];
	 $currentdate=$_POST['curdate'];
 $religion = $_POST['reli'];
 $options = $_POST['wedd'];
 $budget = $_POST['budget'];
 $feedback = $_POST['comment'];
		 
	$chk="";  
foreach($options as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

}
 echo $query="insert into wedregister(`Name`, `Address`,`Email`,`Telephone`,`EventDate`, `Currentdate`,`Religion`,`Options`,`Budget`,`Feedback`)
 values('".$name."','".$address."','".$email."','".$number."','".$date."','".$currentdate."','".$religion."','".$chk."','".$budget."','".$feedback."')";
$creatTable = mysqli_query($conn, $query);

if($creatTable){
header("location:wedding.php");
}
else{
echo "not success";}
?>