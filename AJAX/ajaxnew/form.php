<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	
	

<script>
$(document).ready(function(){
	$("#name").click(function(){
             $("#name1").hide();
    	});
		$("#address").click(function(){
             $("#add1").hide();
				});
		$("#phone").click(function(){
             $("#phone1").hide();
				});
	 $("#dept").click(function(){
             $("#dep1").hide();
				});
	$("#salary").click(function(){
             $("#sal1").hide();
				});
		
		$("#name").click(function(){
		$(".success_msg").hide();
	});	
	});			
	
	
	 
	function validate(){
			
			var name = $("#name").val();
			var add =$("#address").val();
			var phone =$("#phone").val();
		var dept=$("#dept").val();
		var sal=$("#salary").val();
	 		var flag=0;
	 
	
        if(name == '')
         {
         $("#name1").html("Please enter fullname");
			 flag = 1;
		 }
	 
		 
		 
		if(add == '')
         {
         $("#add1").html("Please enter address");
			 flag = 1;
		 }
		 
		 
			 
		if(phone == '')
         {
         $("#phone1").html(" Please enter phone number");
			 flag = 1;
		 }
		
		if(dept == '')
         {
         $("#dep1").html(" Please Select department");
			 flag = 1;
		 }
		
		if(sal == '')
         {
         $("#sal1").html(" Please enter salary");
			 flag = 1;
		 }
	 
	 
			 
		if (flag == 1){
				return false;
			}
			else{
				 send_data();	
				}
	}
		 
	
	
	function send_data(){
		$.post(
			'myform.php',
				{
				name:$("#name").val(),address:$("#address").val(),phone:$("#phone").val(),
				dept:$("#dept").val(),salary:$("#salary").val()},
				function(data){
				//alert(data);
				$('#employee_form')[0].reset();
				$(".success_msg").append(data);
				$(".success_msg").show();
			})
		}
	

</script>
</head>

<body>
<div class="container">
<form method="" action= "myform.php" id="employee_form">
<label>Name</label>
	<input type="text" name="fullname" id="name" class="form-control" placeholder="Enter firstname" required><span id="name1" style="color:red;"></span><br>
	<label>Address</label>
	<input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required><span id="add1" style="color:red;"></span><br>
   <label>Phonenumber</label>
    <input type="text" name="phone" id="phone" placeholder="Enter phone" class="form-control" required><span id="phone1" style="color:red;"></span><br>
       <label>Department</label>
        <input type="text" name="dept" id="dept" placeholder="Enter dept" class="form-control" required><span id="dep1" style="color:red;"></span><br>
<label>Salary</label>
	<input type="text" name="salary" id="salary" placeholder="Enter salary" class="form-control" required><span id="sal1" style="color:red;"></span><br>
	<input type="button" name="submit_data" id="submit" onClick="return validate(); " value="submit_data">
	<div class="alert alert-success success_msg" style="display:none;width:30%;">
		Success...:);
	</div>

</form>
</div>
</body>
</html>
