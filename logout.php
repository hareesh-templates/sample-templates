<?php
session_start(); 
ob_start();
require("connect.php");
session_destroy(); 
echo "logout successfully";
header("location:adminindex.php");
?>