<?php
if(isset($_REQUEST['id'])){
require("connect.php");
$id=$_REQUEST['id'];
 $query= "delete from wedregister where id='$id'";
$delete = mysqli_query($conn, $query);
 

$query ="select * from wedregister";
 $stu_details = mysqli_query($conn, $query);



}
?>



<?php
$query ="select * from wedregister";
 $stu_details = mysqli_query($conn, $query);
$row = $stu_details;



?>
<table border="1" id="delete">
<tr>
            
	<td>name</td>
	<td>address</td>
	<td>email</td>
	<td>number</td>
	<td>date</td>
             <td>curdate</td>
             <td>reli</td>
             <td>options</td>
             <td>budjet</td>
<td>comments</td>
	</tr>
	
		<?php $x="" ; while($result = mysqli_fetch_array($stu_details))
{
	$x++; ?>
		
<tr>
	
	<td>
		<?php echo $result['Name'];  ?>
	</td>
	<td>
		<?php echo $result['Address'];  ?>
	</td>
	<td>
		<?php echo $result['Email'];  ?>
	</td>
	<td>
		<?php echo $result['Telephone'];  ?>
	</td>
	<td>
		<?php echo $result['EventDate']; ?>
	</td>
	<td>
		<?php echo $result['Currentdate'];  ?>
	</td>
	<td>
		<?php echo $result['Religion'];  ?>
	</td>
	<td>
		<?php echo $result['Options'];  ?>
	</td>
	<td>
		<?php echo $result['Budget'];  ?>
	</td>
	<td>
		<?php echo $result['Feedback'];  ?>
	</td>
	<td><input type=button  class="r" value=delete id ="<?php echo $result["id"] ?>">
		<a href="edit.php?id=<?php echo $result['id'];?>">Edit</a></td>
		
	</tr>
		<?php } ?>
</table>