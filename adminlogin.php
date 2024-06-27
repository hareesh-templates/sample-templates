<?php
require("connect.php");
if ($_POST['submit']){
	$name = $_POST['name' ];
	$password = $_POST[ 'password' ];
}

 $query = "select * from login WHERE name='".$name."' and password='".$password."'";
$result = mysqli_query( $conn, $query );
$row = mysqli_fetch_array( $result, MYSQLI_ASSOC );
$count = mysqli_num_rows( $result );
if ( $count == 1 ) {
	header("location:wedadmin.php");
} else {
	echo "wrong creditials";
}
?>