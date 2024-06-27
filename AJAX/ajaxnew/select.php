<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<script>
		  $( document ).ready(function() {
			   $('#e_data').on('click', '.r', function(e) {
				 
			  		var row_id = $(this).attr('id');
					//alert(row_id);
				$.post( 
				   'delete.php',
				  {id: row_id },
				   function(result){
					   $("#e_data").html("");
					   $("#e_data").append(result);
					}
				   );
						  // alert(row_id);
			  
			   });
	 	  });
	 
  
	     
		
		
		
		</script>
</head>

<body>
<div class="container">
<?php require("connect.php");
	$sql = "SELECT * FROM wedadmin";
$result = $conn->query($sql);
?>

<table border="2px"   style="border-collapse: collapse;width:100%" id="e_data" style="">
<tr>
<th>Sno</th>
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

	<?php
					$i= 1;
					  while($row = $result->fetch_assoc()) {
        				 
						  echo "<tr>
						  <td>$i</td>
						  <td>".$row["uname"]."</td>
						  <td>".$row["address"] ."</td>
						  <td>". $row["email"]."</td>
						  <td>". $row["number"]."</td>
						  <td>". $row["date"]."</td>
<td>". $row["curdate"]."</td>
<td>". $row["reli"]."</td>
<td>". $row["date"]."</td>
<td>". $row["options"]."</td>
<td>". $row["date"]."</td>
						  <td><a href=edit.php?id=".$row["id"].">Edit</a></td>
						  <td><input type=button  class=r value=delete id =".$row["id"]."> </td> 
						  </tr>";
						  $i++;
					  }
					
					
					
					?>
</table>
</div>
</body>
</html>