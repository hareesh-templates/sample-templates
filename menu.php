<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MENU</title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="food.css">
<link rel="stylesheet" href="animate.css">
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="slick/slick.min.js" type="text/javascript" charset="utf-8"></script>



<script>

	$(document).ready(function(){
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
	<style> 
		
	.slider {
        width: 100%;
        margin: 10px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
		
	.overlay 
	{
  position: absolute;
  top: 110;
  bottom: 0;
  left: 154;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: rgba(0,0,0,0.6);
}
	
	.overlay:hover  {
  opacity: 1;
}

.slide {
  position: relative;
}

.t {
 position: absolute;
 top: 50%;
 left: 50%;
 -webkit-transform: translate(-50%, -50%);
 transform: translate(-50%, -50%);
 color: white;
 font-size: 24px;
 -webkit-transition: all 300ms ease;
 transition: all 300ms ease;
 font-family: 'Mali', cursive;
}
		.pic{
		background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.3)), url("images/images45.jpg");
		background-repeat:no-repeat;
	 	background-size:cover;
	  	background-attachment:fixed;
		position:relative;
	    height:500px;
}
	.centered {
	position: absolute;
	transform:translate(-50%,-50%);
	top:50%;
	left:50%;
	font-size:45px;
	color:white;
	letter-spacing: 1px;
    font-family:  'Encode Sans Expanded', sans-serif;
	text-align:center;
  }
		.span{
	color:darkkhaki;
	font-size:40px;
	font-family: 'Concert One', cursive;
}	
		.icons a{
	
	padding: 10px;
	
}
		
		  
	  
	  .icons {
		 padding-top: 50px;
		  
	  }
		.main{
			text-align: center;
			font-size:40px;	
			color:darkorange;
			background-color:rgb(0,0,0,0.8);
		}
  .variation{
	text-align: center;
	color:darkgoldenrod;
	font-family: 'Encode Sans Expanded', sans-serif;
	font-weight: bold;
	font-size: 20px;
	  
}


	</style>
    
    
    
    
</head>

<body>
<?php include("header.php")?>


<div class= "container-fluid top">
<div class= "pic">
<div class="centered">MENU</div>
</div>
</div>
<br>
<br>


<div class="main">STARTERS</div>
<br><br><br><br>
<div class="variation">NON-VEGETARIAN</div>
<div class="container">
<section class="regular slider">
  
  
   <div class="mod6">
    <div class="slide">
		<a data-toggle="modal" data-target="#myModal24"> 
			<img src="images/images17.jpg">
		 		<center>
		 			<div class="overlay">
						<div class="t">
 							<b style="color:white">Prawn Majestic</b>
 							<div><i class="fas fa-rupee-sign"></i>135</div>
 						</div>
 						
  					</div>
  				</center>
 		</a>
	   </div>
	  </div>
	   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal25">
		 <img src="images/images18.jpg">
      <center><div class="overlay">
      <div class="t">
      <b>Chicken Balls</b>
      <div><i class="fas fa-rupee-sign"></i>140</div>
      </div>
      </div>
      </center>
      </a>
		   </div>
		   </div>
		   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal26">
      <img src="images/start12.jpg">
       <center><div class="overlay">
      <div class="t"><b>Chicken 65</b> <div><i class="fas fa-rupee-sign"></i>145</div></div></div></center></a>
			   </div></div>
			   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal27">
      <img src="images/images37.jpeg">
       <center><div class="overlay">
      <div class="t"><b>Fish Fry</b> <div><i class="fas fa-rupee-sign"></i>130</div></div></div></center></a>
				   </div></div>
   
  </section>
</div>
<br><br><br>


<div class="variation">VEGETARIAN</div>
<div class="container">
<section class="regular slider">
  
  
   <div class="mod6">
    <div class="slide">
		<a data-toggle="modal" data-target="#myModal28"> 
		<img src="images/images12.jpg">
		 <center><div class="overlay">
			 <div class="t"><b style="color:white">Paneer manchuria</b><div><i class="fas fa-rupee-sign"></i>115</div></div></div></center></a>
	   </div></div>
	   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal29">
		 <img src="images/images25.jpeg">
      <center><div class="overlay">
      <div class="t"><b>Paneer Majestic</b><div><i class="fas fa-rupee-sign"></i>120</div></div></div></center></a>
		   </div></div>
		   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal30">
      <img src="images/images40.jpg">
       <center><div class="overlay">
      <div class="t"><b>Paneer Pakoda</b><div><i class="fas fa-rupee-sign"></i>125</div></div></div></center></a>
			   </div></div>
			   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal31">
      <img src="images/images19.jpg">
       <center><div class="overlay">
      <div class="t"><b>Veg 65</b><div><i class="fas fa-rupee-sign"></i>118</div></div></div></center></a>
				   </div></div>
				   
  </section>

</div>
<br><br><br>



<div class="main">MAIN COURSE</div>
<br><br><br><br>
<div class="variation">NON-VEGETARIAN</div>
<div class="container">
<section class="regular slider">
  
  
   <div class="mod6">
    <div class="slide">
		<a data-toggle="modal" data-target="#myModal"> 
		<img src="images/images10.jpg">
		 <center><div class="overlay">
			 <div class="t"><b style="color:white">Fish Curry</b><div><i class="fas fa-rupee-sign"></i>100</div></div></div></center></a>
	   </div></div>
	   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal1">
		 <img src="images/images27.jpeg">
      <center><div class="overlay">
      <div class="t"><b>Iromba</b><div><i class="fas fa-rupee-sign"></i>110</div></div></div></center></a>
		   </div></div>
		   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal2">
      <img src="images/images13.jpg">
       <center><div class="overlay">
      <div class="t"><b>Fish Creamy</b><div><i class="fas fa-rupee-sign"></i>110</div></div></div></center></a>
			   </div></div>
			   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal3">
      <img src="images/images41.jpg">
       <center><div class="overlay">
      <div class="t"><b>Egg Spicy </b><div><i class="fas fa-rupee-sign"></i>180</div></div></div></center></a>
				   </div></div>
				   
				   <div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal4">
      <img src="images/images18.jpg" >
       <center><div class="overlay">
      <div class="t"><b>Chicken Fry</b><div><i class="fas fa-rupee-sign"></i> 170</div></div></div></center></a>
					   </div></div>
					   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal5">
		 <img src="images/images9.jpg">
		  <center><div class="overlay">
		 <div class="t"><b>Fish Spicy</b><div><i class="fas fa-rupee-sign"></i>175</div></div></div></center></a>
						   </div></div>
   
  </section>

</div>
<br><br><br>




<div class="variation">VEGETARIAN</div>
<div class="container">
<section class="regular slider">
   
    <div class="slide">
		<a data-toggle="modal" data-target="#myModal6"> 
		<img src="images/images19.jpg">
		 <center><div class="overlay">
			 <div class="t"><b style="color:white">Mushroom Manchuria</b><div><i class="fas fa-rupee-sign"></i>120</div></div></div></center></a>
	   </div>
	   
	   <div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal7">
		 <img src="images/images20.jpg">
      <center><div class="overlay">
      <div class="t"><b>Veg Salad</b><div><i class="fas fa-rupee-sign"></i>145</div></div></div></center></a>
		   </div></div>
		   
		   <div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal8">
      <img src="images/images25.jpeg">
       <center><div class="overlay">
      <div class="t"><b>Paneer Fry</b><div><i class="fas fa-rupee-sign"></i> 150</div></div></div></center></a>
			   </div></div>
			   
			   <div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal9">
      <img src="images/images22.jpg">
       <center><div class="overlay">
      <div class="t"><b>Vegan Food</b><div><i class="fas fa-rupee-sign"></i>138</div></div></div></center></a>
				   </div></div>
				   
				   <div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal10">
      <img src="images/images30.jpeg" >
       <center><div class="overlay">
      <div class="t"><b>Fruit Salad </b><div><i class="fas fa-rupee-sign"></i>144</div></div></div></center></a>
					   </div></div>
					   
					   <div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal11">
		 <img src="images/images26.jpeg">
		  <center><div class="overlay">
		 <div class="t"><b>Veg Noodles</b><div><i class="fas fa-rupee-sign"></i>143</div></div></div></center></a>
						   </div></div>
   
  </section>

</div>
<br><br><br>



<div class="main">BEVERAGES</div>
<br><br><br>
<div class="container">
<section class="regular slider">
  
  
   <div class="mod6">
    <div class="slide">
		<a data-toggle="modal" data-target="#myModal12"> 
		<img src="images/drink1.jpg">
		 <center><div class="overlay">
			 <div class="t"><b style="color:white">Strawberry Crusher</b><div><i class="fas fa-rupee-sign"></i>130</div></div></div></center></a>
	   </div></div>
	   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal13">
		 <img src="images/drink2.jpg">
      <center><div class="overlay">
      <div class="t"><b>Coca-Cola</b><div><i class="fas fa-rupee-sign"></i>133</div></div></div></center></a>
		   </div></div>
		   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal14">
      <img src="images/drink3.jpg">
       <center><div class="overlay">
      <div class="t"><b>Carrot Juice</b><div><i class="fas fa-rupee-sign"></i>134</div></div></div></center></a>
			   </div></div>
			   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal15">
      <img src="images/drink4.jpg">
       <center><div class="overlay">
      <div class="t"><b>Apple Juice</b><div><i class="fas fa-rupee-sign"></i>137</div></div></div></center></a>
				   </div></div>
				   
				   <div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal16">
      <img src="images/drink5.jpg" >
       <center><div class="overlay">
      <div class="t"><b>Crusher</b><div><i class="fas fa-rupee-sign"></i>139</div></div></div></center></a>
					   </div></div>
					   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal17">
		 <img src="images/drink6.jpg">
		  <center><div class="overlay">
		 <div class="t"><b>Mocktail</b><div><i class="fas fa-rupee-sign"></i>138</div></div></div></center></a>
						   </div></div>
   
  </section>

</div>
<br><br><br>




<div class="main">DESSERTS</div>
<br><br><br>
<div class="container">
<section class="regular slider">
  
  
   <div class="mod6">
    <div class="slide">
		<a data-toggle="modal" data-target="#myModal18"> 
		<img src="images/dessert1.jpg">
		 <center><div class="overlay">
			 <div class="t"><b style="color:white">Vanilla</b><div><i class="fas fa-rupee-sign"></i>50</div></div></div></center></a>
	   </div></div>
	   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal19">
		 <img src="images/dessert2.jpg">
      <center><div class="overlay">
      <div class="t"><b>Pan Cakes</b><div><i class="fas fa-rupee-sign"></i>60</div></div></div></center></a>
		   </div></div>
		   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal20">
      <img src="images/dessert3.jpg">
       <center><div class="overlay">
      <div class="t"><b>Choco Lava</b><div><i class="fas fa-rupee-sign"></i>44</div></div></div></center></a>
			   </div></div>
			   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal21">
      <img src="images/dessert4.jpg">
       <center><div class="overlay">
      <div class="t"><b>Chocolate Overloded</b><div><i class="fas fa-rupee-sign"></i>45</div></div></div></center></a>
				   </div></div>
				   
				   <div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal22">
      <img src="images/dessert5.jpg" >
       <center><div class="overlay">
      <div class="t"><b>HoneyMoon Delight</b><div><i class="fas fa-rupee-sign"></i>60</div></div></div></center></a>
					   </div></div>
					   
	<div class="mod6">
    <div class="slide">
     <a data-toggle="modal" data-target="#myModal23">
		 <img src="images/dessert6.jpg">
		  <center><div class="overlay">
		 <div class="t"><b>Black Currrent</b><div> <i class="fas fa-rupee-sign"></i>50</div></div></div></center></a>
						   </div></div>
   
  </section>

</div>
<br><br><br><br>

<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Fish Curry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images10.jpg" width="80%" >
         <p>Fish Curry is among the most popular fish recipes in Kerala. Its strong and rich flavour has made it extremely famous among our visitors as well. Kerala style dry fish curry is unique in the use of spices and the recipe below has been compiled from kitchens across the State.</p>
        </div>
        
       
        
      </div>
    </div>
	</div>
  
  
  
  
  <div class="modal" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
      
        <div class="modal-header">
          <h4 class="modal-title">Iromba</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images27.jpeg" width="80%" >
         <p>It is originated from Manipur. They use fermented fish for cooking Iromba. It is famous for its strong and pungent taste. Shrimp is fermented for making iromba. Ingredients used here are not used in other fish curries. Potato, mushrooms are ingredients which give different aroma in this dish. The onion spread on the curry looks it amazing and tempt to eat immediately.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
 
  <div class="modal" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Fish Creamy</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images13.jpg" width="80%" >
         <p>It is fish in yogurt sauce originated in Bengal. Freshwater fish is marinated to cook the dish. To marinate the fish, it is mixed with turmeric powder, chili powder and mustard oil to enrich the taste of the dish. The dish has delicate sourness and spiciness by adding curd and spices to it.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
  


  <div class="modal" id="myModal3">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Egg spicy</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images41.jpg" width="80%" >
         <p> I say this every time I post an egg recipe, but honestly you guys, I really don’t like eggs. ... poached in spicy tomato sauce with pan-fried potatoes LIKE DIS YA’LL. ... One-Pot Spicy Eggs and Potatoes with a homemade tomato simmer sauce, kale, potatoes, eggs, and creamy goat cheese!</p>
        </div>
        
        
        
      </div>
    </div>
  </div>




  <div class="modal" id="myModal4">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Chicken Fry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images18.jpg" width="80%" >
         <p>A fan favorite. Made with white meat chicken, our Chicken Fries are coated in a light crispy breading seasoned with savory spices and herbs. Chicken Fries are shaped like fries and are perfect to dip in any of our delicious dipping sauces. Choose from BBQ, Honey Mustard, Ranch, Zesty, Buffalo and Sweet & Sour.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>




  <div class="modal" id="myModal5">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Fish Spicy</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images9.jpg" width="80%" >
         <p>Fish curry is one of the favorite spicy and delicious curries taken by most Indians along with the rice. Fish is a source of protein. Spicy fish curry gives a delicious taste which enlarges our interest towards a rich protein food.  Salmon, cod, Ilesha, King Fish, Gobies, billfishes, grunts are several varieties of fishes which when cooked in a spicy curry gives different taste.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>


  <div class="modal" id="myModal6">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Mushroom Manchuria</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images19.jpg" width="80%" >
         <p>Anyone who likes Mushrooms, will love Mushroom Manchurian to its death. It is rich in Vitamin D and mushroom manchurian dry is one of the best ways to gorge on its goodness while pleasing taste buds with its spicy taste. Additionally, they are rich source of protein and hence it’s suitable to be served to kids. It is a great party food and brings a welcome change from routine gobi manchurian.</p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal" id="myModal7">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Veg Salad</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images20.jpg" width="80%" >
         <p>Most Middle Eastern nations seem to have a version of smoked aubergine. Try out this simple yet flavoursome vegetarian salad recipe with crunchy pomegranates served with flatbreads.Most Middle Eastern nations seem to have a version of smoked aubergine. Try out this simple yet flavoursome vegetarian salad recipe with crunchy pomegranates served with flatbreads.  </p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal" id="myModal8">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Paneer Fry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images25.jpeg" width="80%" >
         <p>Pan fried paneer tikka – a veggie special, quick and easy paneer preparation. It can be served as a starter or side dish.Paneer shallow fried with ginger-garlic, spices, and curry leaves. This paneer fry is an easy and yummy appetizer to make at home on weekdays, and for parties or any occasion.</p>
        </div>
      </div>
    </div>
  </div>





  <div class="modal" id="myModal9">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Vegan Food</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images22.jpg" width="80%" >
         <p>When entering into a vegetarian lifestyle or simply looking to go meatless a few nights out of the week, it is important to remember the value of protein to a well-balanced diet. Our vegetarian recipes are full of flavor and provide tasty meatless options without sacrificing the nutrients your body needs.In one of our favorite mushroom and pasta dishes, Pappardelle with Mushrooms, truffle oil is used to impart rich, earthy flavor and complement the savory porcini mushrooms. Leftover oil also serves as a great dressing for a small side salad to accompany the meal.</p>
        </div>
      </div>
    </div>
  </div>



  <div class="modal" id="myModal10">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Fruit Salad</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images30.jpeg" width="80%" >
         <p>This recipe shows you how to make fruit salad without the heavy, creamy fruit salad dressing that you’re used to seeing. It leaves plenty of room for all the flavors of the fruit to shine without drenching it in sugar and other random flavors.Plus it doesn’t use any of those packaged pudding mixes. Why should we coat all the vibrant and incredible flavors of the fruit with an artificial flavor from a pudding mix?</p>
        </div>
      </div>
    </div>
  </div>




  <div class="modal" id="myModal11">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Veg Noodles</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images26.jpeg" width="80%" >
         <p>My perception of Chinese food was very different when I was a kid. Almost similar to the perception of Indian food in the western world, quite far from reality. You get the drift, right? Anything with soy sauce and vinegar added to it would be considered Chinese, I guess that’s the long and short of it.</p>
        </div>
      </div>
    </div>
  </div>
  
<br><br>

<div class="modal" id="myModal12">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Strawberry Crusher</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/drink1.jpg" width="80%" >
         <p>This is the first time I’m making crush from scratch and the experience was totally exhilarating. The kiddo who came along with the guests simply loved the Lemonade and shakes that I made of strawberries and I knew that they will not be getting that fruit in their town and also after that I could not find the fruit in the market too.</p>
        </div>
        
       
        
      </div>
    </div>
	</div>
  
  
  
  
  <div class="modal" id="myModal13">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
      
        <div class="modal-header">
          <h4 class="modal-title">Coca-Cola</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/drink2.jpg" width="80%" >
         <p>Coca-Cola, or Coke, is a carbonated soft drink manufactured by The Coca-Cola Company. ... The Coca-Cola Company produces concentrate, which is then sold to licensed Coca-Cola bottlers throughout the world.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
 
  <div class="modal" id="myModal14">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Mojitho</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/drink3.jpg" width="80%" >
         <p>Muddle the lime juice, sugar and mint leaves in a small jug, crushing the mint as you go – you can use the end of a rolling pin for this. Pour into a tall glass and add a handful of ice.Pour over the rum, stirring with a long-handled spoon. Top up with soda water, garnish with mint and serve.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
  


  <div class="modal" id="myModal15">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Natural Juice</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/drink4.jpg" width="80%" >
         <p>Juice is a drink made from the extraction or pressing of the natural liquid contained in fruit and vegetables. It can also refer to liquids that are flavored with concentrate or other biological food sources, such as meat or seafood, such as clam juice.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>




  <div class="modal" id="myModal16">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Crusher</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/drink5.jpg" width="80%" >
         <p>Established in 1965 we, Crushers Fruit Juice Co. is one of the leading manufacturer and wholesaler of Chilli Sauce, Soyabean Sauce, Tomato Sauce.We have achieved expertise in catering to the requirements of our clients exactly as per their specifications. We emphasize on stringent quality standards in order to ensure that the products.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
  
   <div class="modal" id="myModal17">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Mocktail</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/drink6.jpg" width="80%" >
         <p>Just because a mocktail is non-alcoholic doesn't mean it has to be boring! Whether it's for your guests or yourself, it's always a good idea to add a fun and refreshing mocktail into the mix. Here are our favortie easy, delicious, and non-alcoholic recipes to serve up at your next event.</p>
        </div>  
      </div>
    </div>
  </div>
  
  <div class="modal" id="myModal18">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Vanilla</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/dessert1.jpg" width="80%" >
         <p>This is the first time I’m making crush from scratch and the experience was totally exhilarating. The kiddo who came along with the guests simply loved the Lemonade and shakes that I made of strawberries and I knew that they will not be getting that fruit in their town and also after that I could not find the fruit in the market too.</p>
        </div>
        
       
        
      </div>
    </div>
	</div>
  
  
  
  
  <div class="modal" id="myModal19">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
      
        <div class="modal-header">
          <h4 class="modal-title">Pan Cake</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/dessert2.jpg" width="80%" >
         <p>Coca-Cola, or Coke, is a carbonated soft drink manufactured by The Coca-Cola Company. ... The Coca-Cola Company produces concentrate, which is then sold to licensed Coca-Cola bottlers throughout the world.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
 
  <div class="modal" id="myModal20">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Choco Lava</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/dessert3.jpg" width="80%" >
         <p>Muddle the lime juice, sugar and mint leaves in a small jug, crushing the mint as you go – you can use the end of a rolling pin for this. Pour into a tall glass and add a handful of ice.Pour over the rum, stirring with a long-handled spoon. Top up with soda water, garnish with mint and serve.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
  


  <div class="modal" id="myModal21">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Chocolate Overloded</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/dessert4.jpg" width="80%" >
         <p>Juice is a drink made from the extraction or pressing of the natural liquid contained in fruit and vegetables. It can also refer to liquids that are flavored with concentrate or other biological food sources, such as meat or seafood, such as clam juice.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>




  <div class="modal" id="myModal22">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Honeymoon Delight</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/dessert5.jpg" width="80%" >
         <p>Established in 1965 we, Crushers Fruit Juice Co. is one of the leading manufacturer and wholesaler of Chilli Sauce, Soyabean Sauce, Tomato Sauce.We have achieved expertise in catering to the requirements of our clients exactly as per their specifications. We emphasize on stringent quality standards in order to ensure that the products.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
   <div class="modal" id="myModal23">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Black Current</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/dessert6.jpg" width="80%" >
         <p>Just because a mocktail is non-alcoholic doesn't mean it has to be boring! Whether it's for your guests or yourself, it's always a good idea to add a fun and refreshing mocktail into the mix. Here are our favortie easy, delicious, and non-alcoholic recipes to serve up at your next event.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  <!--starters-->
   <div class="modal" id="myModal24">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Prawn Majestic</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images17.jpg" width="80%" >
         <p>Prawns are indeed majestic creatures nutritionally possessing both protein and fat. ... a part of the Japanese nutrition and their value as food cannot be ignored.Prawns are indeed majestic creatures nutritionally possessing both protein and fat. ... a part of the Japanese nutrition and their value as food cannot be ignored.</p>
        </div>
        
       
        
      </div>
    </div>
	</div>
  
  
  
  
  <div class="modal" id="myModal25">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
      
        <div class="modal-header">
          <h4 class="modal-title">Chicken Balls</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images18.jpg" width="80%" >
         <p>These Baked Chicken Meatballs are the BEST! The perfect addition to any meal or to eat right on their own. Bonus: they're meal-prep friendly to ...Crispy Chicken Balls are very tasty, crunchy and non spicy snacks or side dish.This recipe, I invented for my sweet little prince. </p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
 
  <div class="modal" id="myModal26">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Chicken 65</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/start12.jpg" width="80%" >
         <p>Chicken 65 is a popular spicy, delicious and hot South Indian restaurant style boneless chicken starter. ... To make a hyderabadi chicken 65, you can use yogurt for marination as well for seasoningChicken 65 is an easy-to-make and very popular snack recipe from South India, which is prepared using chicken marinated in spices and flavoured with tomato ketchup and yoghurt</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
  


  <div class="modal" id="myModal27">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Fish Fry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images37.jpeg" width="80%" >
         <p> This delicious, crispy & spicy fish fry makes for a great appetizer or a side to a meal. A simple vegetable salad or sliced onion ... Fish fry masala or masala fish fry made by shallow frying fish pieces that are coated well with a good thick masala paste..</p>
        </div>
        
        
        
      </div>
    </div>
  </div>





  
     <div class="modal" id="myModal28">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Paneer Manchuria</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images12.jpg" width="80%" >
         <p> Paneer manchurian is a Indo Chinese recipe that is very popular in the Indian restaurants. Batter fried paneer is added to the Manchurian ...Dry and spicy Paneer Manchurian is one of the best Indo Chinese recipes. This recipe is similar to gobi manchurian but uses soft paneer cubes instead of ...</p>
        </div>
        
       
        
      </div>
    </div>
	</div>
  
  
  
  
  <div class="modal" id="myModal29">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
      
        <div class="modal-header">
          <h4 class="modal-title">Paneer Majestic</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images25.jpeg" width="80%" >
         <p> For the batter and paneer. In a large mixing bowl combine, maida, corn flour, dahi, salt, pepper and turmeric powder or yellow food color. Stir everything well. Add little water at a time to make a smooth batter, once done set aside. Add the paneer strip in the batter, and stir the paneer, until well coated.</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
 
  <div class="modal" id="myModal30">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Paneer Pakoda</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images40.jpg" width="80%" >
         <p>Paneer pakora recipe with video and step by step photos. Spicy, delicious, crispy and flavorful paneer pakoda that any one will love with green ...paneer pakora recipe, paneer pakoda, how to make crispy paneer pakora with step by step photo/video. a simple snack recipe prepared with ...</p>
        </div>
        
        
        
      </div>
    </div>
  </div>
  
  
  


  <div class="modal" id="myModal31">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Veg 65</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        <div class="modal-body">
         <img class="mx-auto d-block" src="images/images19.jpg" width="80%" >
         <p>Vegetable 65 Recipe is a wonderful Chinese Starter, made with Mixed Vegetables and flavored with Vinegar, Soy Sauce and Chilli Sauce. egetable 65 is an easy-to-make and delicious Hyderabadi starter is prepared using cauliflower, mushrooms, and potatoes marinated with spices and flavoured with chili sauce, soya sauce and vinegar</p>
        </div>
        
        
        
      </div>
    </div>
	</div>
  
  
  <?php include("footer.php")?>
  
  
</body>
</html>
