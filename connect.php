<?php  

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "project");
$conn = mysqli_connect(HOST,USER,PASSWORD,DBNAME);
if($conn){
 "sucessfully connected data base";
}
else{
	echo "unable to connect database";
exit();
}
?>