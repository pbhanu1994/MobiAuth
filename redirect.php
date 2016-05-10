<?php 
include_once("db.php");
$client_id = $_POST['client_id'];
// $client_pass = $_POST['client_pass'];
function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$hash = md5(random_password(8));

if(isset($_POST['emp_id'])){
  $emp_id = 1;
}else{
  $emp_id = 0;
}

if(isset($_POST['emp_name'])){
  $emp_name = 1;
}else{
  $emp_name = 0;
}

if(isset($_POST['emp_addr'])){
  $emp_addr = 1;
}else{
  $emp_addr = 0;
}

if(isset($_POST['emp_mob'])){
  $emp_mob = 1;
}else{
  $emp_mob = 0;
}

$query = mysql_query("INSERT INTO dom_reg VALUES(NOT NULL, '$client_id', '$hash', '$emp_id', '$emp_name', '$emp_addr', '$emp_mob')");

if(isset($query)){
  header('Location: client_site.php');
}else{
  echo "Error occured!";
}

 ?>