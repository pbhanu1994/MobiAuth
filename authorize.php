<?php 
include_once("db.php");

$client_id = $_POST['client_id']; //username
$client_pass = $_POST['client_pass']; //password
$c_id = $_POST['c_id']; //client_id
$c_pass = $_POST['c_pass']; //client_pass
$imei_num = $_POST['imei_num'];

if (($c_id && $c_pass) && ($imei_num == "impossible")) {
 $query = mysql_query("SELECT client_id, client_pass FROM dom_reg WHERE client_id = '$c_id' AND client_pass = '$c_pass'");
  
  if(mysql_num_rows($query) > 0) {
  $arr = mysql_fetch_assoc($query);

  $c_db_id = $arr['client_id'];
  $c_db_pass = $arr['client_pass'];

  if(($c_db_id == $c_id) && ($c_db_pass == $c_pass)){
    //echo "Correct!";
  }else{
    //echo "Wrong!";
    }
  }
}else{
  //$imei_num = $_POST['imei_num']; // imei_num
  $f_print_query = mysql_query("SELECT imei_num FROM user_regs WHERE imei_num = '$imei_num'");
  while($imei_ret = mysql_fetch_array($f_print_query)){
    $imei_val = $imei_ret['imei_num'];
  }
  if ($imei_num == $imei_val) {
      $client_id_val = mysql_query("SELECT user_name FROM user_regs WHERE imei_num = '$imei_num'");
      while($client_id_val_ret = mysql_fetch_array($client_id_val)){
          $client_id = $client_id_val_ret['user_name'];
      }
    if (mysql_num_rows($f_print_query) > 0) {
      //echo "Correct";
    }else{
      //echo "Wrong";
    }   
  }

}

$query2 = mysql_query("SELECT username FROM client_db WHERE username = '$client_id'");
if(mysql_num_rows($query2) > 0){
  //echo "Username Available";
  $flag= 1;
  $temp_ref_token1 =  mysql_query("SELECT temp_token,refresh_token FROM user_regs WHERE user_name = '$client_id'");
  while($arr_tokens = mysql_fetch_array($temp_ref_token1)){
    $temp_token_ret1 = $arr_tokens['temp_token'];
    $refresh_token_ret1 = $arr_tokens['refresh_token'];
  }

  $temp_ref_token2 =  mysql_query("SELECT temp_token,refresh_token FROM client_db WHERE username = '$client_id'");
  while($arr_tokens = mysql_fetch_array($temp_ref_token2)){
    $temp_token_ret2 = $arr_tokens['temp_token'];
    $refresh_token_ret2 = $arr_tokens['refresh_token'];
  }
  
  if ($temp_token_ret2 == $temp_token_ret1) {
    $client_id = $client_id;
  }elseif ($refresh_token_ret2 == $refresh_token_ret1) {
    $client_id = $client_id;
  }else{
    //header('Location:site2.php');
  }

}else{
  //echo "Username not Available";
  $flag = 0;

// Generation of 2 Tokens starts here
  function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$hash = md5(random_password(8));

  function random_password2( $length = 9 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$hash2 = md5(random_password2(9));

//End of Generations of 2 Tokens

$update_query = mysql_query("UPDATE user_regs SET temp_token = '$hash', refresh_token = '$hash2' WHERE user_name = '$client_id'");
$query3 = mysql_query("INSERT INTO client_db VALUES(NOT NULL,'$client_id', '$hash', '$hash2')");

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>MobiAuth | Authorize</title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
       <div class="header">
        <h3 class="text-muted">MobiAuth</h3>
      </div> 

      <div class="content">
      <h2><span style="color:yellow;">Warning:</span> You are about to use an external Website. To cancel this transaction Click 'EXIT'</h2>
        <form action="final.php" method="POST">
          <input type="hidden" name="c_id" value="<?php echo $c_id; ?>">
          <input type="hidden" name="c_pass" value="<?php echo $c_pass; ?>">
          <input type="hidden" name="client_id" value="<?php echo $client_id; ?>">
          <input type="hidden" name="client_pass" value="<?php echo $client_pass; ?>">

            <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Continue"> 
            <br>
            <a href="login.php" class="btn btn-lg btn-danger btn-block">Exit</a>          
          </form>  
      </div>
<br>
      <div class="footer">
        <p>&copy; MobiAuth | Manoj | Bhanu</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
