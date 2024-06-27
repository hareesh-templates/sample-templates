<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php
require("connect.php");

$booking_table_details = mysqli_query($conn, "select * from book_table");
?>

<table  class="table table-striped">
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone_number</th>
	<th>Date</th>
	<th>Time</th>
	<th>Message</th>
	</tr>
	<?php $y="" ; while($result = mysqli_fetch_array($booking_table_details ))
{
	$y++;
	?>
	<tr>
	<td><?php echo $result['id']; ?></td>
	<td><?php echo $result['name']; ?></td>
	<td><?php echo $result['email']; ?></td>l
	<td><?php echo $result['phone_number']; ?></td>
	<td><?php echo $result['date']; ?></td>
	<td><?php echo $result['time']; ?></td>
	<td><?php echo $result['message']; ?></td>
	</tr>
	<?php } ?>
	</table>
