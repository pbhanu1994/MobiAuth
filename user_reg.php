<?php
include_once("db.php");

$user = $_POST['user'];
$pass = $_POST['pass'];
$imei = $_POST['imei'];
$emp_id = $_POST['emp_id'];
$emp_name = $_POST['emp_name'];
$emp_addr = $_POST['emp_addr'];
$emp_mob = $_POST['emp_mob'];

$query = mysql_query("INSERT INTO user_regs VALUES (NOT NULL,'$user', '$pass', '$imei', '$emp_id', '$emp_name', '$emp_addr','$emp_mob')");

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