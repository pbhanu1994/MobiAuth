<?php 
include_once("db.php");
 $c_id = $_POST['client_id'];
 $c_pass = $_POST['client_pass'];

$query = mysql_query("SELECT client_id, client_pass FROM dom_reg WHERE id = 13");
if(mysql_num_rows($query) > 0) {
  $arr = mysql_fetch_assoc($query);

  $c_db_id = $arr['client_id'];
  $c_db_pass = $arr['client_pass'];

  if(($c_db_id == $c_id) && ($c_db_pass == $c_pass)){
    echo "Correct!";
  }else{
    die("Wrong!");
  }

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

    <title>MobiAuth</title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
       <div class="header">
        <!-- <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul> -->
        <h3 class="text-muted">MobiAuth</h3>
      </div> 

      <div class="jumbotron">
        <h1>Authentication</h1>
        <form action="site2.php" method="POST" class="form-signin">
                  <input type="text" name="client_id" class="form-control" placeholder="User ID" autofocus required>
                  <input type="password" name="client_pass" class="form-control" placeholder="Password" required>
          <hr>
        <center>
          <h4>OR</h4>
          <img src="images/fingerprint.png" alt="FingerPrintScan">
          <!-- <button type="submit" class="btn btn-lg btn-success btn-block">Continue</button> -->
          <a href="welcome.php" class="btn btn-lg btn-success btn-block">Continue</a>
        </center>
        </form>

      </div>


      <div class="footer">
        <p>&copy; MobiAuth | Manoj | Bhanu</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
