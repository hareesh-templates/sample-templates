<!DOCTYPE html>
<html><head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="food.css">
   <meta charset="utf-8">
    <title>Registration</title>
<style>
	
	
	span{
		color:red;
	}	
	.error{
		color:red;
	}
	.registration_form{
		position: absolute;
		top:50px;
		left:15%;
		width:70%;
		background-color:antiquewhite;
		padding:80px;
		border-radius: 20px;
		
	}
	
	.registration_form input{
		margin:30px;
	}
	h1{
		text-align:center;
		color:cadetblue;
		margin:60px 0 80px 0;
	}
	.btn1{
		margin:10px;
	}
	</style>
	<script>
		
		function isNumber(evt){
		var charCode=evt.which;
			
		if(charCode>=48 && charCode <=57){
			return true;
		}
			else{
				return false;
			}
	}
		function fn_clear(){
			document.getElementById("fn_error").innerHTML=""
		}
		
		function ln_clear(){
			document.getElementById("ln_error").innerHTML=""
		}
		function pn_clear(){
			document.getElementById("pn_error").innerHTML=""
		}
		
		function em_clear(){
			document.getElementById("em_error").innerHTML=""
		}
		
	 function validation(){
var password1 = document.getElementById("pass1").value;
	var password2 = document.getElementById("pass2").value;

	if(password1==password2) 
{
	document.getElementById("pass_e").innerHTML="password matched";
return true;
}
if(password1!=password2)
{
	document.getElementById("pass_e").innerHTML="password not matched";
	return false;
}

		 fn = document.getElementById("fname").value;
		 ln = document.getElementById("lname").value;
		 pn = document.getElementById("pnumber").value;
		 em = document.getElementById("email").value;
		 
		 var fn_error=false;
		 var ln_error=false;
		 var pn_error=false;
		 var em_error=false;
		 
		 if(fn==""){
			 fn_error=true;
		 }
		 if(ln==""){
			 ln_error=true;
		 }
		 
		 if(pn==""){
			 pn_error=true;
		 }
		 if(em==""){
			 em_error=true;
		 }
		 if (fn_error==true)
			 {
				 document.getElementById("fn_error").innerHTML="Enter the first name";
			 }
		  if (ln_error==true)
			 {
				 document.getElementById("ln_error").innerHTML="Enter the last name";
			 }
		 if (pn_error==true)
			 {
				 document.getElementById("pn_error").innerHTML="Enter the Phone number";
				
			 }
		  if (em_error==true)
			 {
				 document.getElementById("em_error").innerHTML="Enter the Email ID";
			 }
			
		
		 if((fn_error==true)||(ln_error=true)||(pn_error=true)||(em_error==true)){
			 return false;
		 }
		
		
	 }

	 function len(){
		pn = document.getElementById("pnumber").value;
		if(pn.length<10){
		
		document.getElementById("pn_error").innerHTML="Number must be 10numbers";	
		
	}
	if(pn.length>10){
		
		document.getElementById("pn_error").innerHTML="Number must be 10numbers";
		return false;
		
	}

	 }
	</script>
</head>

<body>
	<?php include("header.php")?>

	<form  action="validate.php" method="POST" class="login">
		
	<h1 class="login">Login Form</h1>
	<div class="container">
			<div calss="row">
			<div class="col-sm-6 offset-sm-3 user">	User:<input type="text" id="text" name="name" class="form-control"  onKeypress="em_clear()" required> <span id="em_error" class="error"></span></div>
		

			<div class="col-sm-6 offset-sm-3 user" id="output">Password :<input type="password" name="pwd" class="form-control" id="pass1" onKeyUp="color()" required>
			</div>		
					
		<div class="col-sm-6 offset-sm-3 text-center">	
	<input type="submit" value="submit" name="submit" class="btn btn1 btn-success" onClick="validation()"></div>
	</div>
	</div>
	</form>	
   
	
	<?php include("footer.php")?>
</body>
</html>