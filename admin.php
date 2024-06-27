<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>admin</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="food.css">
</head>

<body>
	
	<?php include("header.php")?>

	<div class="container-fluid admin_head">
		
	<div class="row">
		
	<div class="col-sm-10 admin"><h2>Admin Login</h2></div>
		
	<div class="col-sm-2 admin"><h4><a href="logout.php">Logout</a></h4></div>
		
	</div>
		
	</div>
	
<div class="row">
		
  <div class="col-4">
	  
    <div class="list-group" id="list-tab" role="tablist">
		
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Data</a>
		
		
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Employee</a>
		
		
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Review</a>
		
    </div>
	  
  </div>
		
  <div class="col-8">
	  
    <div class="tab-content" id="nav-tabContent">
		
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
		  
	<form action="booking_data.php" method="post">
		
	<input type="submit" class="btn btn-primary" name="book_talbe_get" value="details">
		
	</form>
		
		</div>
		
		
		
      <div class="tab-pane fade " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
		  
		  <form action="employee_data.php" method="post">
		  
	<input type="submit" class="btn btn-primary" name="book_talbe_get" value="details" class="form-control"> 
			  
	</form><br>
		  
		  <form action="employee_form.php" method="post">
		  
	<input type="submit" class="btn btn-primary" name="book_talbe_get" value="Add" class="form-control">
			  
	</form>
		  
		</div>
		
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
		  
		  <form action="review_data.php" method="post">
			  
	<input type="submit" class="btn btn-primary" name="book_talbe_get" value="details">
			  
	</form>
		  
		</div>
		
		
		
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
		  
		  <form action="order_data.php" method="post">
			  
	<input type="submit" class="btn btn-primary" name="book_talbe_get" value="details">
			  
	</form>
		  
		</div>
		
    </div>
	  
  </div>
		
</div>
	

	
	
</body>
</html>