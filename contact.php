<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<link rel="stylesheet" href="food.css">
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="food.css">
<link rel="stylesheet" href="animate.css">
<script>

	
				
		function clear_1(){
			document.getElementById("error_firstPrint").innerHTML = " ";
		}
		
		function clear_2(){
			document.getElementById("error_lastPrint").innerHTML = " ";
		}
		
		function clear_3(){
			document.getElementById("error_emailPrint").innerHTML = " ";
		}
		
		function clear_4(){
			document.getElementById("error_phonePrint").innerHTML = " ";
		}
		
		function validateme(){
			
			var firstName = document.getElementById("fname").value;
			var lastName = document.getElementById("lname").value;
			var email = document.getElementById("email").value;
			var phone = document.getElementById("phone").value;
			
			
			var firstName_error = false;
			var lastName_error = false;
			var email_error = false;
			var phone_error = false;
			
			if(firstName == ""){
				firstName_error = true;
			}
			
			if(lastName == ""){
				lastName_error = true;
			}
			
			if(email == ""){
				email_error = true;
			}
			
			if(phone == ""){
				phone_error = true;
			}
			
			if(firstName_error == true){
				document.getElementById("error_firstPrint").innerHTML = "Please Enter First Name";
			}
			
			if(lastName_error == true){
				document.getElementById("error_lastPrint").innerHTML = "Please Enter Last Name";
			}
			
			if(email_error == true){
				document.getElementById("error_emailPrint").innerHTML = "Please Enter Your Email";
			}
			
			if(phone_error == true){
				document.getElementById("error_phonePrint").innerHTML = "Please Enter Your Phone Number";
			}
			
			if((firstName_error == true) || (lastName_error == true) || (email_error == true) || (phone_error == true)){
				return false;
			}
		}
   
</script>
   <style>
		span
		{
			color:darkorange;
		}
		
		.margin-top-30
		{
			margin-top: 40px;
		}
	   .form{
		   color:navajowhite;
	   }
    
	
	.pic4{
		background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.5)), url("images/images48.jpg");
		background-repeat:no-repeat;
	 	background-size:cover;
	  	background-attachment:fixed;
		position:relative;
	  
}
	.web{
		color:black;
	}
	   .checked {
  color: orange;
}
	
	</style>
	 

</head>

<body>

<?php include("header.php")?>

<div class= "container-fluid top">
<div class= "pic4">
  <div class="centered">CONTACT</div>
</div>
</div>
<br><br>


 <div class="container">
 <div class="row us">
	<div class="col-md-6 col-sm-6"><img src="images/images49.jpg" class="image"></div>

 			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-12">
  			<h1 class="text-center">Review Form</h1>
  			
   			<form id="regForm" action="review_table.php" method="POST">
   				<div class="row">
   				
   					<div class="col-sm-6 form">
   						Name:
    					<input id="fname" type="text" class="form-control" name="name" onkeyup="return clear_1()">
    					<span id="error_firstPrint"></span>
    				</div>
    
    			
    				<div class="col-sm-6 form">
   						Email:
    					<input id="email" type="email" class="form-control" name="email" onkeyup="return clear_3()">
    					<span id="error_emailPrint"></span>
					</div>
    
    			
    				<div class="col-sm-12 form text-center">
    					Comments:
    				<textarea id="phone" type="phone" class="form-control" name="comments" onkeyup="return clear_4()"></textarea>
    					<span id="error_phonePrint"></span>
					</div>
    
    				<div class="col-sm-12 form review_form">Rating:
						
						
						
						
						<input id="r1" type="radio" name="rating" value="Very Bad">
						<label for="r1"><i class="fa fa-star"></i> </label>
						
						<input id="r2" type="radio" name="rating" value="Bad">
						<label for="r2"><i class="fa fa-star"></i> </label>
						
						
						<input id="r3" type="radio" name="rating" value="Average" >
						<label for="r3"><i class="fa fa-star"></i> </label>
						
						
						<input id="r4" type="radio" name="rating" value="Very good">
						<label for="r4"><i class="fa fa-star"></i> </label>
						
						
						<input id="r5" type="radio" name="rating" value="Excellent">
						<label for="r5"><i class="fa fa-star"></i> </label>
						
					</div>
    				<br>
   				
    				<div class="col-sm-12 text-center margin-top-30">
    					<input type="submit" id="submit" class="btn btn-success" onClick="return validateme()" value="submit" name="submit">
    				</div>
    		
    			</div>
   			</form>
   			</div>
				</div>
	 </div>
   		</div>
   		</div>
   		
   		<br><br>

<div class="map container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.8711373469328!2d79.97511441526352!3d14.434588989908367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4cf33089d8172b%3A0x6f2b6a1431b544ad!2sNirvana!5e0!3m2!1sen!2sin!4v1561007433341!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><br>
	



<?php include("footer.php")?>
</body>
</html>
