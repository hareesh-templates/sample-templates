<?php
session_start();
ob_start();
require("connect.php");
session_destroy();
echo "<br>log out successfully";
header("location:index.php");
?>