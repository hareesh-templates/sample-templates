
<?php
    
	     define("HOST","localhost");
	     define("USER","root");
	     define("PASSWORD","");
	     define("DBNAME","wedd");
	     $conn=mysqli_connect(HOST,USER,PASSWORD,DBNAME);
	     

if($conn->connect_error) {
  exit('Could not connect');

}
else {
	echo "success";
}

	?>