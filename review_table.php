<?php
require("connect.php");

 

 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$rating = $_POST['rating'];
 

$query = "insert into review(name,email,comments,rating) values('".$name."','".$email."','".$comments."','".$rating."')";

$creat = mysqli_query($conn, $query);

if($creat){
	
echo "review received";
	
}
?>