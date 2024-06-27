<?php include("connect.php");
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$pwd=$_POST["pwd"];
}
$query="Select * from user where admin='$name' and password='$pwd'";
$select=mysqli_query($conn,$query);
$count=mysqli_num_rows($select);
if($count==1){
	header("location:admin.php");
}
else{echo "wrong credentials";}
?>