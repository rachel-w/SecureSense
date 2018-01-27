<?php require "login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class ="container">
        <h1 style= "text-align: center;">Thank you for using <strong>SecureSense!</strong> </h1>
        <h2 style= "text-align: center;">You may now, use the network.</h2>
    </div>
    <div class="container">
        
      <div class="form-signin">
        <div class="alert alert-success">You have been <strong>successfully connected to the network!</strong>.</div>
        
        <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->
  </body>
</html>
