<?php
require("connect.php");

if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$designation=$_POST["designation"];
	$salary=$_POST["salary"];
	
}
$query="INSERT INTO `employees`( `name`, `designation`, `salary`) VALUES ('".$name."','".$designation."','".$salary."')";
$select=mysqli_query($conn,$query);
if($select){
	header("location:employee_data.php");
}

?>