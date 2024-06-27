<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="animate.css">
 <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"><br>
	<link rel="stylesheet" href="booking.css">
<meta charset="utf-8">

<title>Book a table</title>
</head>

<body>
	<?php include("header.php")?>
	
	<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
   
    <div class="carousel-inner">
      <div class="carousel-item active">
   		<div class="food">
   
		  </div>
     </div>
  </div>
</div>
</div>

	
<div class="container">
	<div>
			<br><br><br><br><br><br>
 			
  			<h1 class="text-center">Book A Table</h1>
  			<br><br>
   			<form action="table.php" method="post" class="form-group">
				
   			<div class="container">
   				<div class="row">
   				
  					
  						<div class="col-sm-12 table">
   						
    					<input name="name" id="fname" type="text" placeholder="Enter Name" class="form-control form-group" onkeyup="return clear_1()">
    					<span id="error_firstPrint"></span>
    				</div>
    
    			
    				<div class="col-sm-12 table">
   						
    					<input name="phone" id="Phone No" type="text" placeholder="Phone No" class="form-control form-group phone" onkeyup="return clear_2()">
    					<span id="error_lastPrint"></span>
					</div>
    
    			
    				<div class="col-sm-12 table">
   						
    					<select name="time" id="time"  class="form-control form-group" onkeyup="return clear_3()">
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
    					<span id="error_emailPrint"></span>
					</div>
    
    				
    			
    				<div class="col-sm-12 table">
    					
    				<input name="date" id="date" type="date" placeholder="Date" class="form-control form-group" onkeyup="return clear_4()">
    				<span id="error_phonePrint"></span>
					</div>
					
					<div class="col-sm-12 table">
   						
    					<input name="people" id="persons" type="text" placeholder="No Of Persons" class="form-control form-group" onkeyup="return clear_5()">
    					<span id="error_Print"></span>
    				</div>
    
 
    				<div class="col-sm-12 text-center">
    					<input name="submit" type="submit" id="submit" class="btn btn-success" onClick="return validateme()" value="SUBMIT">
    				</div>
    		
    			</div>
    			</div>
   			</form>
   			
   		</div>
		</div>
	
<br><br><br><br><br>
	
<?php include("footer.php")?>
</body>
</html>
