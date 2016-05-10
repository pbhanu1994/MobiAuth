<?php 
include_once("db.php");
$query = mysql_query("SELECT client_id, client_pass FROM client_id_pass WHERE id= 2");
if(mysql_num_rows($query) > 0){
  $arr = mysql_fetch_assoc($query);
  $c_id = $arr['client_id'];
  $c_pass = $arr['client_pass'];
}else{
  die("Error occured!");
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

    <title>Log in </title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color: #c0ca33;">

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading" style="color:#000;">Log in</h2>
        

        <input type="text" class="form-control" placeholder="Email address" autofocus>
        <input type="password" class="form-control" placeholder="Password">
        <!-- <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>
      <hr>
      <form action="site2.php" method="POST" class="form-signin">
        <center><h4 class="form-signin-heading">Or</h4></center>  
        <input type="hidden" name="client_id" value="<?php echo $c_id; ?>">
        <input type="hidden" name="client_pass" value="<?php echo $c_pass; ?>">
        <center>
          <!-- <button type="button" href="site2.php" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Log in with MobiAuth</button> -->
          <input type="submit" class="btn btn-success btn-lg btn-block" name="" value="Log in with MobiAuth">
          <!-- <a href="site2.php" class="btn btn-success btn-lg btn-block">Log in with MobiAuth</a> -->
        </center>
      </form>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
