<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/index.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

			<script>
			$(document).ready(function(){
				$("#name").click(function(){
             		$("#name1").hide();
    			});
				$("#age").click(function(){
             		$("#age1").hide();
    			});
				$("#mail").click(function(){
             		$("#mail1").hide();
    			});
				$("#phone_number").click(function(){
             		$("#phone_number1").hide();
    			});
				$("#designation").click(function(){
             		$("#designation1").hide();
    			});
				$("#salary").click(function(){
             		$("#salary1").hide();
    			});
				$("#doj").click(function(){
             		$("#doj1").hide();
    			});
				$("#dob").click(function(){
             		$("#dob1").hide();
    			});

			})
			
			</script>

<style>
.head {
	
	margin: 10px auto 0px;
	color: white;
	background: #ff4040;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 8px;
}
form, .content {
	width: 40%;
	margin: 5px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input, .input-group select {
	width: 93%;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid #f6a525;
}



	
	.input-group span{
	color:red;
		text-align:center;
	}
	 .success h6{
		color: #155724;
text-align: center;
background-color: #d4edda;
margin-left: 114px;
font-family: initial;
padding: 10px;
	}
 </style>

	
	
</head>


<body>
<span><button class="btn"><a href="employee.php">Back</a></button></span>
	
<br>
<form method="" id="emp">
	<div class="head">
	<h2>Employee</h2>
</div>
<div class="input-group">
	<span id="success" class="success" style="display: none;">
		<h6> "New employee added successfully" </h6>
	</span>
	
	</div>
	<div class="input-group">
		<label>NAME:</label>
		<input type="text" name="name" value="" id="name" required> <span id="name1"></span>
	</div>
	<div class="input-group">
		<label>AGE:</label>
		<input type="text" name="age" value="" id="age"><span id="age1"></span>
	</div>
	<div class="input-group">
		<label>EMAIL:</label>
		<input type="text" name="mail" value="" id="mail" required><span id="mail1"></span>
	</div>
	<div class="input-group">
		<label>PHONE NUMBER:</label>
		<input type="text" name="phone_number" value="" id="phone_number" required><span id="phone_number1"></span>
	</div>
	<div class="input-group">
		<label>DESIGNATION:</label>
		<select name="designation" id="designation">
		<option></option>
		<option value="Manager">Manager</option>
		<option value="Chef">chef</option>
		<option value="Delivery Boy">Delivery Boy</option>
		<option value="Accounant">Accounant</option></select><span id="designation1"></span>
	</div>
	<div class="input-group">
		<label>Salary:</label>
		<input type="text" name="salary" id="salary" value=""><span id="salary1"></span>
	</div>
	<div class="input-group">
		<label>Date of join:</label>
		<input type="date" name="doj" id="doj" value="" required><span id="doj1"></span>
	</div>
	<div class="input-group">
		<label>Date of birth:</label>
		<input type="date" name="dob" id="dob" value="" required><span id="dob1"></span>
	</div>
	<div class="input-group">
	<input type="button" name="submit" value="ADD EMPLOYEE" class="head" id="name" onClick="validation();">
	</div>
	</form>
	<script>
	
	 
		
		function validation(){
		
		var name = $("#name").val();
		var age = $("#age").val();
		var mail = $("#mail").val();
		var phone_number = $("#phone_number").val();
		var designation= $("#designation").val();
		var salary = $("#salary").val();
		var doj = $("#doj").val();
		var dob = $("#dob").val();
		
		var flag=0;
	 
	
        if(name == '')
         {
         $("#name1").html("Please enter fullname");
			 flag = 1;
		 }
		 
		 if(age == '')
         {
         $("#age1").html("Please enter age");
			 flag = 1;
		 }
		 if(mail == '')
         {
         $("#mail1").html("Please enter email");
			 flag = 1;
		 }
		 if(phone_number == '')
         {
         $("#phone_number1").html("Please enter phone number");
			 flag = 1;
		 }
		 if(salary == '')
         {
         $("#salary1").html("Please enter salary");
			 flag = 1;
		 }
		 if(doj == '')
         {
         $("#doj1").html("Please enter date of join");
			 flag = 1;
		 }
		 
		 if(dob == '')
         {
         $("#dob1").html("Please enter date of birth");
			 flag = 1;
		 }
		 if (flag == 1){
				return false;
			}
			else{
				 send_data();	
				}	
			
		}
		
		
		
	 
		//alert("hi");
		function send_data(){	
			$.post('emp_insert.php', 
				   {
				   name:$("#name").val(),age:$("#age").val(),mail:$("#mail").val(),
				phone_number:$("#phone_number").val(),designation:$("#designation").val(),
				salary:$("#salary").val(),
				doj:$("#doj").val(),dob:$("#dob").val()
				   
				   }, 
			function(data){
					 
					$("#emp")[0].reset();
					$(".success").append(data);
					$("#success").show();
					console.log(data);

				} )
		}
		
 
		 
	
	
	</script>	
	
	
</body>

	</html>

