<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <div class="container">
    <h2 class="form-signin-company" style ="margin: 0 auto; width:400px;">SecureSense Network Login</h2>
      <form class="form-signin" name="form1" method="post" action="checklogin.php">
        <h2 class="form-signin-heading">Please Sign In</h2>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        

        <div id="message"></div>
      </form>
    <button name="Submit" id="submit-signup" class="btn btn-lg btn-secondary btn-block" onclick="visitSignUp();" style="margin: 0 auto; width: 300px;">Register</button>
    </div> <!-- /container -->
    
    <script>
    function visitSignUp(){
        window.location='http://cyan.csam.montclair.edu/~contreraso1/SecureSense/login/signup.php';
    }
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>
