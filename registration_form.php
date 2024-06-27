<?php 
require("connect.php"); 
if(isset($_POST['submit'])){
 $Name = $_POST['name'];
 $Email_ID = $_POST['mail'];
 $Phone_Number = $_POST['phonenumber'];
 $Password = $_POST['password'];

}

$query="insert into registration(Name,Email_ID,Phone_Number,Password) values('".$Name."', '".$Email_ID."', '".$Phone_Number."', '".$Password."')";
$creatTable = mysqli_query($conn, $query);

if($creatTable){
echo "sucess" ;
}
else{
echo "not success";}
?>