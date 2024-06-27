<?php
require("connect.php");

if(isset($_POST['submit'])){
	$item = $_POST['item'];
	$price = $_POST['price'];
}	
  $query = "insert into orders(item,price) values('".$item."','".$price."')";
  $creat = mysqli_query($conn, $query);

	?>