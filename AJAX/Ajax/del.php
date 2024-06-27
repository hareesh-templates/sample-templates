<?php
if(isset($_REQUEST['id'])){
require("connect.php");
$id=$_REQUEST['id'];
 $query= "delete from students where std_id='$id'";
$delete = mysqli_query($conn, $query);
 

$query ="select *from studetns";
 echo $stu_details = mysqli_query($conn, $query);



}
?>



<?php

 $stu_details = mysqli_query($conn, "select * from students");
$row = $stu_details;



?>
<table border="1" id="delete">
<tr>
	<td>name</td>
	<td>age</td>
	<td>email</td>
	<td>phone number</td>
	<td>actions</td>
	</tr>
	
		<?php $x="" ; while($result = mysqli_fetch_array($stu_details))
{
	$x++; ?>
		
<tr>
	<td><?php echo $result['name'];  ?></td>
	<td><?php echo $result['age'];  ?></td>
	<td><?php echo $result['email'];  ?></td>
	<td><?php echo $result['phone_number']; ?></td>
	<td><input type=button  class="r" value=delete id ="<?php echo $result["std_id"] ?>">
		<a href="edit.php?id=<?php echo $result['std_id'];?>">Edit</a></td>
		
	</tr>
		<?php } ?>
</table>