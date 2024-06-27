<?php
if(isset($_REQUEST['id'])){
require("connect.php");
$id=$_REQUEST['id'];
echo $query= "delete from students where std_id='$id'";
$delete = mysqli_query($conn, $query);
 

}
?>
