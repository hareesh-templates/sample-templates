<?php
session_start();
ob_start();
require("connect.php"); 
if($_POST['submit']){

 $mail = $_POST['mail'];

 $password = $_POST['password'];
}

$query= "select * from registration WHERE Email_ID='".$mail."' and Password='".$password."'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1){
$_SESSION["login_name"] = $row["Name"];
header("location:user.php");
}
else{
header("location:user1.php");
}
?>