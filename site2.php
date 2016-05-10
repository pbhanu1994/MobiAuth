<?php 
include_once("db.php");
$c_id = $_POST['client_id'];
$c_pass = $_POST['client_pass'];
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
        <form action="authorize.php" method="POST" class="form-signin">
                  <input type="text" name="client_id" class="form-control" placeholder="User ID" autofocus required>
                  <input type="password" name="client_pass" class="form-control" placeholder="Password" required>

                  <input type="hidden" name="c_id" value="<?php echo $c_id; ?>">
                  <input type="hidden" name="c_pass" value="<?php echo $c_pass; ?>">
                  <input type="hidden" name="imei_num" value="impossible">
<br>
                  <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Continue">
        </form>
          <hr>
        <center>
          <h4>OR</h4>
          <form action="authorize.php" method="POST">
          <input type="hidden" name="imei_num" value="12345678">
          <!-- hide the client's details -->
          <input type="hidden" name="c_id" value="<?php echo $c_id; ?>">
          <input type="hidden" name="c_pass" value="<?php echo $c_pass; ?>">
          <input type="hidden" name="client_id" value="0">
          <input type="hidden" name="client_pass" value="0">

          <button type="submit">
            <img src="images/fingerprint.png" alt="FingerPrintScan">
          </button>
              
          </form>
        </center>
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
