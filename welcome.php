<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Registration | MobiAuth</title>

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

  <body>

    <div class="container">

      <form action="user_regs.php" method="GET" class="form-signin">
        <h2 class="form-signin-heading">Register User</h2>
        <input type="text" name="user" class="form-control" placeholder="Username" autofocus>
        <input type="password" name="pass" class="form-control" placeholder="Password">
        <input type="text" class="form-control" name="imei" value="" placeholder="IMEI Number">
        <input type="text" class="form-control" name="emp_id" value="" placeholder="Employee ID">
        <input type="text" class="form-control" name="emp_name" value="" placeholder="Employee Name">
        <input type="text" class="form-control" name="emp_addr" value="" placeholder="Employee Address">
        <input type="text" class="form-control" name="emp_mob" value="" placeholder="Employee Mobile">
        <br>
        <input type="submit" class="btn btn-lg btn-primary btn-block" name="" value="Register">
        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button> -->
      </form>
      <hr>
      <form class="form-signin">
        <center><h4 class="form-signin-heading">Or</h4></center>  
        <center>
          <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Register Domain</button>
        </center>
      </form>

    </div> <!-- /container -->

<!-- Modal starts -->
<div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Enter the fields</h4>
              </div>
              <div class="modal-body">

                <form action="redirect.php" method="POST" class="form-signin">
                  <input type="text" name="client_id" class="form-control" placeholder="Client ID" autofocus>
                   
                   <input type="hidden" name="client_pass" class="form-control" placeholder="Client Password"> 


           
                  <br>
                  <!-- <h5>Enter the fields wanted from the Master Site</h5> -->
               

                  <div class="form-group has-warning">
                    <!-- <input class="form-control" name="emp_id" type="text" placeholder="Field 1" > -->
                    <label class="checkbox">
                      <input type="checkbox" name="emp_id" value="remember-me"> Employee Id
                    </label>
                    <label class="checkbox">
                      <input type="checkbox" name="emp_name" value="remember-me"> Employee Name
                    </label>
                    <label class="checkbox">
                      <input type="checkbox" name="emp_addr" value="remember-me"> Employee Address
                    </label>
                    <label class="checkbox">
                      <input type="checkbox" name="emp_mob" value="remember-me"> Employee Mobile
                    </label>
                    
                    <br>
                    <!-- <a href="client_site.php" type="submit" class="btn btn-lg btn-success btn-block">Continue</a> -->
                  <button type="submit" class="btn btn-lg btn-success btn-block">Continue</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="close" data-dismiss="modal" aria-hidden="true" type="button" class="btn btn-primary">Cancel</button>
              </div>

            </div><!-- /.modal-content -->
          </div>
<!-- Modal ends -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
