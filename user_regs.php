<?php
include_once("db.php");

$user = $_GET['user'];
$pass = $_GET['pass'];
$imei = $_GET['imei'];
$emp_id = $_GET['emp_id'];
$emp_name = $_GET['emp_name'];
$emp_addr = $_GET['emp_addr'];
$emp_mob = $_GET['emp_mob'];

$query = mysql_query("INSERT INTO user_regs VALUES (NOT NULL,'$user', '$pass', '$imei', '$emp_id', '$emp_name', '$emp_addr','$emp_mob','','')");

if(isset($query)){
header('Location: thank.php');
}else{
 	die("Error occured!");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Thank you!</h1>
</body>
</html>