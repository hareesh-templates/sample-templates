<?php
require('connect.php');
session_start();
	ob_start();
if(isset($_POST['update'])){
	$id=$_POST['Id'];
	$name=$_POST['name'];
	$designation= $_POST['designation'];
	$salary = $_POST['salary'];

$query = "update employees set name='".$name."', designation='".$designation."',salary='".$salary."' where Id='".$id."'";
	
	
	$update = $conn->query($query) or die ($conn->error.__LINE__);
	
	if($update){
		echo "updated";
	}else{
		echo "not updated";
	}
}
?>
