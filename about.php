<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/fontawesome.min.css">
<link rel="stylesheet" href="food.css">
<link rel="stylesheet" href="animate.css">

<style>
	
.pic1{
		background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.5)), url("images/images46.jpg");
		background-repeat:no-repeat;
	 	background-size:cover;
	  	background-attachment:fixed;
		position:relative;
	    height:500px;
}
	.pic2{
		background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.5)), url("images/images47.jpg");
		background-repeat:no-repeat;
	 	background-size:cover;
	  	background-attachment:fixed;
		position:relative;
		height:300px;
		
}
	
	.flip-card
{
  background-color: transparent;
  width: 300px;
  height: 200px;
  perspective: 1000px;
}

.flip-card-inner 
{
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner 
{
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back 
{
  position: absolute;
  width: 100%;
  height:101%;
  backface-visibility: hidden;
}

.flip-card-front 
{
  background-color: #bbb;
  color: black;
}

.flip-card-back 
{
  background-color: lightgrey;
  color: black;
  transform: rotateY(180deg);
}
	</style>
	

</head>

<body>
<?php include("header.php")?>



<div class= "container-fluid top">
<div class= "pic1">
 <div class="centered">ABOUT</div>
</div>
</div>
<br><br>





 <div class="container">
 <div class="row us">
	<div class="col-md-6 col-sm-6"><img src="images/ceo3.jpg" class="image"></div>
	<div class="col-sm-12 col-md-6 margin-top-70">
	<span class="first"><b>When I Created This Restaurant, I Wanted To Make Only The Most Delicious Food.</b></span><br><span class="text"><b>"Each Of Our Restaurants Have Their Own Distinct Space Within The Country".</b></span>
	</div>
	</div>
	
</div>
<br><br>
 
 

<div class= "container-fluid top">
<div class= "pic2">
</div>
</div>
<br><br>
	
	<div class="container" style = "color:navajowhite">
	<center>
	<h2  style="font-family: 'Mali', cursive;
	 font-size: 50px; 
	 margin-bottom: 40px;">Our Chef's</h2>
	 </center>
</div>


<div class="container">
	<center><div class="row">
		<div class="col-sm-4">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/cheif1.jpg" alt="Avatar" style="width:300px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>Thomas Williams</h1> 
      <p>Senior Chef</p> 
      <p>15 Years Working In Professional Kitchens In London, New York & Sydney Including Michelin star and 3 Hatted Restaurants. Enjoy Working In An Industry.</p>
    </div>
  </div>
</div>
</div>
		
		
		<div class="col-sm-4">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/Cheif6.png" alt="Avatar" style="width:300px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>Monisha Bharadwaj</h1> 
      <p>Chef</p> 

      <p>Chef-owner of Indian cookery school Cooking With Monisha , food writer.</p>
    </div>
  </div>
			</div>
		</div>
		
		
		<div class="col-sm-4">
			<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/cheif5.jpg" alt="Avatar" style="width:300px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>Mark Priston</h1> 
      <p>Chef
</p> 
      <p>The "Talented Black Cook" Stereotype Is A Stale One -- Leftover From A Long History Of Slavery And Servitude In White Kitchens.</p>
    </div>
  </div>
</div>

		</div>
		
	</div></center>
</div>
<br><br>






 <?php include("footer.php")?>
</body>
</html>
