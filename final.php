<?php 
include_once("db.php");
  $c_id = $_POST['c_id'];
  $c_pass = $_POST['c_pass'];
  $client_id = $_POST['client_id'];
  $client_pass = $_POST['client_pass'];

$query = mysql_query("SELECT * FROM dom_reg WHERE client_id= '$c_id' AND client_pass = '$c_pass'");
if (mysql_num_rows($query) > 0) {
  while($arr = mysql_fetch_array($query)){
    $emp_id = $arr['emp_id'];
    $emp_name = $arr['emp_name'];
    $emp_addr = $arr['emp_addr'];
    $emp_mob = $arr['emp_mob'];

    if($emp_id == 1){
      $emp_query = mysql_query("SELECT emp_id FROM user_regs WHERE user_name = '$client_id'");
      $arr_emp_id = mysql_fetch_assoc($emp_query);
         $arr_emp_id['emp_id'];
    }

    if($emp_name == 1){
      $emp_query = mysql_query("SELECT emp_name FROM user_regs WHERE user_name = '$client_id'");
      $arr_emp_name = mysql_fetch_assoc($emp_query);
         $arr_emp_name['emp_name'];
    }

    if($emp_addr == 1){
      $emp_query = mysql_query("SELECT emp_addr FROM user_regs WHERE user_name = '$client_id' ");
      $arr_emp_addr = mysql_fetch_assoc($emp_query);
         $arr_emp_addr['emp_addr'];
    }

    if($emp_mob == 1){
      $emp_query = mysql_query("SELECT emp_mob FROM user_regs WHERE user_name = '$client_id'");
      $arr_emp_mob = mysql_fetch_assoc($emp_query);
         $arr_emp_mob['emp_mob'];
    }

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

    <title>MobiAuth | Authorize</title>

    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

  </head>

  <body style="background-color: #c0ca33;">

    <div class="container">
       <div class="header">
        <h3 class="text-muted" style="color: #000;">MobiAuth</h3>
      </div> 

      <div class="well content">

        <table class="table" >
          <caption><h3><b>Extraction of Results</b></h3></caption>
          <thead>
            <tr>
              <th>Employee Id</th>
              <th>Employee Name</th>
              <th>Employee Address</th>
              <th>Employee Mobile</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $arr_emp_id['emp_id']; ?></td>
              <td><?php echo $arr_emp_name['emp_name']; ?></td>
              <td><?php echo $arr_emp_addr['emp_addr']; ?></td>
              <td><?php echo $arr_emp_mob['emp_mob']; ?></td>
            </tr>
          </tbody>
        </table>
       
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