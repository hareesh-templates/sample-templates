<?php include("header.php")?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="food.css">
<link rel="stylesheet" href="animate.css">

<?php
require("connect.php");
$booking_table_details = mysqli_query($conn, "select * from booking");
?>

<table  class="table table-striped">
	<tr>
	<th>Id</th>
	<th>name</th>
	<th>phone</th>
	<th>time</th>
	<th>date</th>
	<th>people</th>
	<th>Edit</th>
	</tr>
	
	
	<?php $y="" ; while($result = mysqli_fetch_array($booking_table_details))
{
	$y++;
	?>
	
	<tr>
	<td><?php echo $result['Id']; ?></td>
	<td><?php echo $result['name']; ?></td>
	<td><?php echo $result['phone']; ?></td>
	<td><?php echo $result['time']; ?></td>
	<td><?php echo $result['date']; ?></td>
	<td><?php echo $result['people']; ?></td>
	<td class="edit"><a href="edit.php?id='<?php echo $result['Id']; ?>'"> Edit </a>
	</td>
	</tr>
	<?php } ?>
	</table>
