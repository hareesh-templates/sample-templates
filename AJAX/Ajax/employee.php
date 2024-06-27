<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script>
				$(document).ready(function(){
					
                $('#delete1').on('click', '.r', function(e){
	
 
	var row_id=$(this).attr('id');
	 //alert(row_id);
	$.post('del.php', {id:row_id}, 
		   function(result){
		$("#delete").html("");
		$("#delete").append(result);
	}
		   );
});
		});
		
		
		</script>
	</head>
<body>
<h1>emp_details</h1>
	<?php
include("connectajax.php");
$query="select * from wedregister";

	$emp_details = mysqli_query($conn, $query);
//$row = $emp_details;



?>
<table border="1" id="delete">
<tr>
	<td>name</td>
	<td>address</td>
	<td>email</td>
	<td>telephone</td>
	<td>date</td>
	<td>curdate</td>
	<td>reli</td>
	<td>options</td>
	<td>budget</td>
	<td>feedback</td>
	
	</tr>
	
		<?php $x="" ; while($result = mysqli_fetch_array($emp_details))
{
	$x++; ?>
		
<tr>
	<td><?php echo $result['Name'];  ?></td>
	<td><?php echo $result['Address'];  ?></td>
	<td><?php echo $result['Email'];  ?></td>
	<td><?php echo $result['Telephone']; ?></td>
	<td><?php echo $result['EventDate']; ?></td>
	<td><?php echo $result['Religion']; ?></td>
	<td><?php echo $result['Options']; ?></td>
	<td><?php echo $result['Budget']; ?></td>
	<td><?php echo $result['Feedback']?></td>
	
	<td><input type=submit  class="r" value=delete id ="<?php echo $result["id"] ?>">
		<a href="edit.php?id=<?php echo $result['id'];?>">Edit</a></td>
		
	</tr>
		<?php } ?>
</table>

