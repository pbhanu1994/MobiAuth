<?php 
include_once("db.php");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Log in </title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>
  <?php 
$query = mysql_query("SELECT client_id,client_pass FROM dom_reg ORDER BY id DESC LIMIT 1");
$q_rows = mysql_num_rows($query);
if($q_rows > 0){
$clients_details = mysql_fetch_array($query);
$c_id = $clients_details['client_id'];
$c_pass = $clients_details['client_pass'];

mysql_query("INSERT INTO client_id_pass VALUES (NOT NULL, '$c_id', '$c_pass')");

echo '<input type="hidden" class="form-control" name="client_id" value="'.$c_id.'">';
echo '<input type="hidden" class="form-control" name="client_pass" value="'.$c_pass.'">';
}else{
  echo "error";
}

?>

  <center>
    <h1 class="form-signin-heading">Thank you!</h1>
  </center>

    <div class="container">

      <form action="login.php" method="POST" class="form-signin">
        <?php 
          echo '<input type="hidden" class="form-control" name="client_id" value="'.$c_id.'">';
          echo '<input type="hidden" class="form-control" name="client_pass" value="'.$c_pass.'">';
        ?>
        <br>
        <input type="submit" class="btn btn-lg btn-primary btn-block" name="" value="Re-direct">
    <!--     <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button> -->
      </form>


    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
