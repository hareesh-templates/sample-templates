<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NIRVANA</title>
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
	
		function clear_5(){
			document.getElementById("error_Print").innerHTML = " ";
		}
		
		function validateme(){
			
			var firstName = document.getElementById("fname").value;
			var lastName = document.getElementById("lname").value;
			var email = document.getElementById("email").value;
			var phone = document.getElementById("phone").value;
			var persons = document.getElementById("persons").value;
			
			
			var firstName_error = false;
			var lastName_error = false;
			var email_error = false;
			var phone_error = false;
			var persons_error = false;
			
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
			
			if(persons == ""){
				person_error = true;
			}
			
			if(firstName_error == true){
				document.getElementById("error_firstPrint").innerHTML = "Enter First Name";
			}
			
			if(lastName_error == true){
				document.getElementById("error_lastPrint").innerHTML = "Enter phone number";
			}
			
			if(email_error == true){
				document.getElementById("error_emailPrint").innerHTML = " Enter Time";
			}
			
			if(phone_error == true){
				document.getElementById("error_phonePrint").innerHTML = "Enter Date";
			}
			
			if(person_error == true){
				document.getElementById("error_print").innerHTML = "Enter no of persons";
			}
			
			if((firstName_error == true) || (lastName_error == true) || (email_error == true) || (phone_error == true) ||(person_error == true)){
				return false;
			}
		} 
    </script>

		<script>
			var zero = 0;

			$(document).ready(function(){

				$(window).on('scroll', function(){
					$('.navbar').toggleClass('hide', $(window).scrollTop() > zero);
					zero =  $(window).scrollTop();
					$('.navbar').css({transition: 'transform 0.3s ease-in-out'});
				});
		
		             
	$(".regular").slick({
        dots: false,
        infinite: true,
		centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
		autoplay: true,
    	autoplaySpeed: 2500
      });
		});
	</script>
</head>

<body>
<?php include("header.php")?>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
   
    <div class="carousel-inner">
      <div class="carousel-item active">
   		<div class="food">
   
  	 </div>
        <div class="carousel-caption d-none d-md-block">
           <div class="carousel-caption1 d-none d-md-block zoomInUp animated">
          <h5 class="heading">      

			<p class="typetext"><b>MAIN MOTO...</b><br>
         	<p class="tyt"><b>Fresh. <br> Satisfying. <br> Heavenly.</b></p></p></h5>
        </div>
      </div>
     </div>
  </div>
</div>
</div>





	<div class="container">
	<div class="row about ">
	<div class="col-md-6">
	 <div class="header">We The Best, Prepare The Best Food From Around "India".</div></div>
	<div class="col-md-6 col-sm-12" id="counter">
	<div id="value" class="date counter-Txt"><span class="counter-value" data-count="15">0</span></div>
	<div class="years">YEARS</div>
		</div>
		</div>
	

	
	<div class="row us">
	<div class="col-md-6 col-sm-6"><img src="images/images11.jpg" class="image"></div>
	<div class="col-sm-12 col-md-6 margin-top-70">
	<span class="first"><b>When A Craving For Food Strikes,You’d Better Be Ready.</b></span><br><span class="text"><b>We’ve Put Together A Collection Of 20 Of The Best Dishes.<br> "We’re Warning You : These Dishes Are Epic. You Will Not Be Able To Resist Them".</b></span>
	</div>
	
	
</div>
</div>
<br><br>
			
			
			
			
<div class= "container-fluid top">
<div class= "pic">
<div class="centered1">"We Cook Tasty Foods,We Are The Best When It Comes To SeaFoods."</div>
</div>
</div>
<br>
<br>

<div class="container">
<div class="row us">
	<div class="col-md-6 col-sm-6"><img src="images/images41.jpg" class="image"></div>
	<div class="col-sm-12 col-md-6 margin-top-70">
	<span class="text">
	<b>"We Make Food With Soul,Each Recipe Is Unique And Designed For Our Restaurant. Fine Food Is Best Appreciated When Paired With Fine Recipe".</b><br>
	</span>
	<a href="about.html"><button class="btn2 btn-1 btn-1e">ABOUT RESTAURANT</button></a>
	</div>
	
</div>
</div>
<br><br>

<div class="container-fluid parallex" id="05">
<div class="container">
	<div>
			<br><br><br><br><br><br>
 			
  			<h1 class="text-center">Book A Table</h1>
  			<br><br>
   			<form action="table.php" method="post" class="form-group">
				
   			<div class="container">
   				<div class="row">
   				
  					
  						<div class="col-sm-2 table">
   						
    					<input name="name" id="fname" type="text" placeholder="Enter Name" class="form-control form-group" onkeyup="return clear_1()">
    					<span id="error_firstPrint"></span>
    				</div>
    
    			
    				<div class="col-sm-2 table">
   						
    					<input name="phone" id="Phone No" type="text" placeholder="Phone No" class="form-control form-group phone" onkeyup="return clear_2()">
    					<span id="error_lastPrint"></span>
					</div>
    
    			
    				<div class="col-sm-2 table">
   						
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
    
    				
    			
    				<div class="col-sm-2 table">
    					
    				<input name="date" id="date" type="date" placeholder="Date" class="form-control form-group" onkeyup="return clear_4()">
    				<span id="error_phonePrint"></span>
					</div>
					
					<div class="col-sm-2 table">
   						
    					<input name="people" id="persons" type="text" placeholder="No Of Persons" class="form-control form-group" onkeyup="return clear_5()">
    					<span id="error_Print"></span>
    				</div>
    
 
    				<div class="col-sm-2 text-center">
    					<input name="submit" type="submit" id="submit" class="btn btn-success" onClick="return validateme()" value="SUBMIT">
    				</div>
    		
    			</div>
    			</div>
   			</form>
   			
   		</div>
		</div>
   			</form>
   			
   		</div>
		</div>
		</div>
		
		<br><br>
		
		<div class="container">
		<div class="row us">
	<div class="col-md-6 col-sm-6"><img src="images/dessert7.jpg" class="image"></div>
	<div class="col-sm-12 col-md-6 margin-top-70">
	<span class="text">
	<b>"Various Handmade Desserts Made By Our Craftsmen. You Will Be Amazed When You Taste Them. You Will Not Be Able To Resist Them".</b><br>
	<a href="menu.html"><button class="btn2 btn-1 btn-1e">MENU</button></a>
	</span>
	
	</div>
	</div>
</div>
<br><br>
		
		
	
	
	<?php include("footer.php")?>

<div onclick="topFunction()" id="myBtn" title="Go to top">
	<i class="fas fa-angle-up" ></i>
</div>
	
	
	
	
	
	
		<script>
		var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 3000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            
          }

        });
    });
    a = 1;
  }

});
	</script>

<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop =0;
}
</script>
		
</body>
</html>
