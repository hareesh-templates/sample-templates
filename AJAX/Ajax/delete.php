<!DOCTYPE html>



<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script>
				$(document).ready(function(){
					
$('#delete').on('click', '.r', function(e){
	
 
	var row_id=$(this).attr('id');
	 
	$.post('del.php', {id:row_id}, 
		   function(result){
		$('#delete').html("");
		$("#delete").append(result);
	}
		   )
});
		});
		
		
		</script>
	</head>
<body>
<h1>Stu_details</h1>
	<?php
require("connect.php");
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
	</body>
</html>

