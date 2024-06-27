<!doctype html>
<html>
<head>
<title>contact</title>
<link rel="stylesheet" href="../event/CSS/contact.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../event/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
              <script>
             
  	$(function() {
		
			
		$( "#curdate" ).datepicker({
			 	dateFormat: "dd-mm-yy"
				 
		 });
	});
	</script>
		</head>
	
<?php include("header.php") ?>

<div class="bg-img"></div>
<div class="container">
  <div class="row">
    <div class="col-sm-6"><br>
      <h4 class="ev">SHAHANAZ EVENT PLANNING</h4>
	  <p>We are always pleased to accept emails from fellow professionals introducing their services. Regretfully, due to the high volume we receive daily, it is not always possible to answer each one individually. If you telephone you will be directed to email us. See our Work With Us page for more information.
          </p><br>
		  <h6>PRESS/MEDIA & SPEAKING ENQUIRIES</h6>
		  <p>Please contact Selina Van Orden<br>

e. press enquiries t. 0203 411 3860  |  Ex UK: +44 203 411 3860</p><br>
		  <h6>JOB & INTERNSHIP ENQUIRIES</h6>
		  <p>Please see more information on the Work With Us page.<br>

If you telephone you will not be put through but directed to email us.
</p><br>
<h6>SALES ENQUIRIES

</h6>
		  <p>We do not accept sales calls or respond to sales related emails. Sarah Haywood Ltd does not advertise.
</p>
	  </div>    
	  <div class="col-sm-6">
	  	<div class="container tb"><br>
			<h2>Contact US</h2>
    <form action="cont.php" class="was-validated tb1" method="post">
		<div class="row">
			<div class="col-md-4">
    <div class="form-group">
      <label for="uname">Username</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
        </div></div>
			<div class="col-md-4">
    <div class="form-group">
      <label for="address">Address</label>
      <input type="address" class="form-control" id="address" placeholder="Enter Address" name="address" required>
				</div></div></div>
			<div class="row">
			<div class="col-md-4">
		<div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
				</div></div>
				<div class="col-md-4">
				<div class="form-group">
      <label for="number">Telephone</label>
      <input type="number" class="form-control" id="number" placeholder="number" name="number" required>
					</div></div></div>
		<div class="row">
			<div class="col-md-8">
		<div class="form-group">
      <label for="date">EventDate</label>
      <input type="date" class="form-control" id="date" placeholder="Date" name="date" required>
				</div></div>
		<div class="col-md-8">
		<div class="form-group">
      <label for="date">Currentdate</label>
		 <input type="text" id="curdate" name="curdate" class="form-control" value="<?php $now = new DateTime();
			echo $now->format('Y-m-d'); ?>"  required>
				</div></div></div>
		<div class="row">
			<div class="col-md-3">
    <div class="form-group form-check">
      <label class="form-check-label">
	 <label>Event</label><br>
        <input class="form-check-input" type="radio" name="event" value="wedding">Wedding<br>
		<input class="form-check-input" type="radio" name="event" value="party" >Party<br>
		<input class="form-check-input" type="radio" name="event" value="Decoration">Decoration<br>
      </label>
				</div></div>
		
		</div>
		<div class="row"><div class="col-md-8">
			<div class="form-group">
  <label for="comment">Description</label>
  <textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
</div>
			</div>
		</div>
    <input type="submit" class="btn btn-outline-dark" name="submit" value="SUBMIT">
  </form>
	  </div></div></div></div>

<?php include("footer.php") ?>
	</body>
</html>