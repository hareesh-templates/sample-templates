<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>selectdata</title>
	<link rel="stylesheet" href="CSS/parties.css">
	<link rel="stylesheet" href="CSS/event.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<?php
     require("connect.php");
     $studeDetails=mysqli_query($conn,"select * from party");
?><?php include("adminheader.php") ?><br><br><br><br><br><br>
	<h1 style="text-align: center; color:blueviolet" >Party Information</h1>
	<table class="table table-hover  table-info">
	<tr style="width:900px">
		<th >id</th>
		<th>Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>Telephone</th>
		<th>EventDate</th>
		<th>PartyType</th>
		<th>Location</th>
		<th>Budget</th>
		<th>Feedback</th>
		</tr>
		<?php $x="0";while($result=mysqli_fetch_array($studeDetails)){$x++;?>
		<tr>
			<td><?php echo $x;?></td>
			<td><?php echo $result['Name']?></td>
			<td><?php echo $result['Address']?></td>
			<td><?php echo $result['Email']?></td>
			<td><?php echo $result['Telephone']?></td>
			<td><?php echo $result['EventDate']?></td>
			<td><?php echo $result['PartyType']?></td>
			<td><?php echo $result['Location']?></td>
			<td><?php echo $result['Budget']?></td>
			<td><?php echo $result['Feedback']?></td>
			
      </tr>
		<?php }?>
	</table><?php include("footer.php") ?>
</body>
</html>