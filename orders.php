<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php include("connect.php");
	$query="select * from items";
	$select=mysqli_query($conn,$query);
	
	
	?>
	<form action="orders_insert.php" method="post">
		Table:<input type="text" name="table">
	<table class="table table-striped">
	<tr>
	<th>Item</th>
	<th>Price</th>
	<th>Quantity</th>
	
	</tr>
	<?php  while($result = mysqli_fetch_array( $select, MYSQLI_ASSOC ))
{
	
	?>
	<tr>
		
	<td><input id="<?php echo $result['id']; ?>" type="checkbox" value="<?php echo $result['item']; ?>" name="item"><label for="<?php echo $result['id']; ?>"><?php echo $result['item']; ?></label></td>
		<td><input type="text" value="<?php echo $result['price']; ?>" name="price"></td>
		<td><input type="number"  name="quantity"></td>
	
	
	</tr>
	<?php } ?>
	</table>
		total:<input type="text" name="total">
		<input type="submit" value="order">
		</form>
</body>
</html>