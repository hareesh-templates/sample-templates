<?php
	require( "connect.php" );
	session_start();
	ob_start();

	if ( isset( $_REQUEST['id'] ) ) {

		$id = $_REQUEST['id'];

		$query = "select * from employees where Id= $id";
		$row = mysqli_query( $conn, $query );
		$result = mysqli_fetch_array( $row, MYSQLI_ASSOC );
?>
	<html>

	<body>
		<a href="employee_data.php">go to employee_data</a>
		<form action="employee_update.php" method="post">

			<table>
				<tr style="display:none">
						<input value="<?php echo $result['Id'] ?>" type="hidden" name="Id">
					</tr>
				<tr>
					<td>name</td>
					<td><input value="<?php echo $result['name'] ?>" type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>designation</td>
					<td><input value="<?php echo $result['designation'] ?>" type="text" name="designation">
					</td>
				</tr>
				<tr>
					<td>salary</td>
					<td><input value="<?php echo $result['salary'] ?>" type="text" name="salary">
					</td>
				</tr>

				<tr>
					<td><input type="submit" name="update"> </td>
				</tr>

			</table>
		</form>
	</body>
	</html>
	<?php }?>