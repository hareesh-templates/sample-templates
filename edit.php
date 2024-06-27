<?php
	require( "connect.php" );
	session_start();
	ob_start();

	if ( isset( $_REQUEST['id'] ) ) {
		
		$id = $_REQUEST['id'];

		$query = "select * from booking where Id= $id";
		$row = mysqli_query( $conn, $query );
		$result = mysqli_fetch_array( $row, MYSQLI_ASSOC );
?>
	<html>

	<body>
		<form action="update_form.php" method="post">

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
						<td>phone</td>
						<td><input value="<?php echo $result['phone'] ?>" type="tel" name="phone">
						</td>
					</tr>
					<tr>
						<td>time</td>
						<td>
							<!--<input value ="<?php /*?><?php echo $result['time'] ?><?php */?>" type="time" name="time" required>-->
							<select value="<?php echo $result['time'] ?>" name="time" id="time">
								<option>Select Time</option>
								<option>11:00 am to 12:00 pm</option>
								<option>12:00 pm to 01:00 pm</option>
								<option>01:00 pm to 02:00 pm</option>
								<option>02:00 pm to 03:00 pm</option>
								<option>03:00 pm to 04:00 pm</option>
								<option>04:00 pm to 05:00 pm</option>
								<option>05:00 pm to 06:00 pm</option>
								<option>06:00 pm to 07:00 pm</option>
								<option>07:00 pm to 08:00 pm</option>
								<option>08:00 pm to 09:00 pm</option>
								<option>09:00 pm to 10:00 pm</option>
								<option>10:00 pm to 11:00 pm</option>
								<option>12:00 am to 01:00 am</option>
								<option>01:00 am to 02:00 am</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>date</td>
						<td><input value="<?php echo $result['date'] ?>" type="date" name="date">
						</td>
					</tr>

					<tr>

						<td>people</td>
						<td><input value="<?php echo $result['people'] ?>" type="number" name="people" required>
						</td>
					</tr>

					<td><input type="submit" name="update"> </td>
				</tr>


			</table>
		</form>
	</body>
	</html>
	<?php }?>