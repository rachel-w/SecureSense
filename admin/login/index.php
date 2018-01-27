<?php
	session_start();
	if(isset($_SESSION['login_user'])){
header("location: ../");
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - SecureSense</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<script src="../assets/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="../assets/css/login.css">
	   <!-- Bootstrap -->
    <link href="..securesense/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body >
    
    <div class="container">
    <h2 class="form-signin-company" style ="margin: 0 auto; width:500px;padding: 3px;padding-top:10px;">SecureSense Network Admin Login</h2>
      
      <form method="POST" action="login.php" style ="max-width: 330px;padding: 15px;margin: 0 auto;"">
        <h2 class="form-signin-heading">Please Sign In</h2>
        <input name="username" id="name" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
        <button name='submit' id='submit' class="btn btn-lg btn-primary btn-block"value ="LOGIN" type="submit">Sign in</button>
        <div id="message"></div>
      </form>
    <button name="Submit" id="submit-signup" class="btn btn-lg btn-secondary btn-block" onclick="visitSignUp();" style="margin: 0 auto; width: 300px;">Register</button>
    </div> <!-- /container -->
    
    <script>
    function visitSignUp(){
        window.location='http://cyan.csam.montclair.edu/~contreraso1/PHP-Login-master/login/admin_signup.php';
    }
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>


	<!--<div id="main_login">-->
	<!--	<div class="row">-->
	<!--		<div class="col-md-2">-->
	<!--		</div>-->
	<!--		<div class="col-md-4 cmptr">-->
	<!--			<img src="../assets/img/b.png" class="pull-left" caption="d">-->
	<!--			<div class="panel pull-right pnldef lft">-->
	<!--				<sm>a</sm>-->
	<!--				<sm>d</sm>						-->
	<!--				<sm>d</sm>						-->
	<!--				<sm>+</sm>-->
	<!--				<sm class="btn-info">F12</sm>						-->
	<!--				<sm>@</sm>						-->
	<!--				<sm>del</sm>						-->
	<!--				<sm>F8</sm>						-->
	<!--				<sm>@</sm>						-->
	<!--				<sm>n</sm>-->
	<!--				<sm>j</sm>-->
	<!--				<sm>del</sm>						-->
	<!--				<sm>F3</sm>						-->
	<!--				<sm>@</sm>						-->
	<!--				<sm>h</sm>-->
	<!--				<sm>?</sm>-->
	<!--				<sm class="btn-danger">del</sm>						-->
	<!--				<br>-->
	<!--				<sm>a</sm>-->
	<!--				<sm>d</sm>						-->
	<!--				<sm>d</sm>						-->
	<!--				<sm>+</sm>-->
	<!--				<sm class="btn-info">add</sm>						-->
	<!--				<sm>@</sm>						-->
	<!--				<sm>del</sm>						-->
	<!--				<sm>F8</sm>						-->
	<!--				<sm>@</sm>						-->
	<!--				<sm>n</sm>-->
	<!--				<sm>j</sm>-->
	<!--				<br>-->
	<!--				<sm>a</sm>-->
	<!--				<sm>d</sm>						-->
	<!--				<sm>d</sm>						-->
	<!--				<sm>+</sm>-->
	<!--				<sm class="btn-primary">ins</sm>						-->
	<!--				<sm>@</sm>						-->
	<!--				<sm>@</sm>						-->
	<!--				<sm>n</sm>-->
	<!--				<sm>j</sm>-->
	<!--				<sm>del</sm>						-->
	<!--				<sm>F3</sm>						-->
	<!--				<sm>@</sm>						-->
	<!--				<sm>h</sm>-->
	<!--				<sm>?</sm>-->
	<!--				<sm class="btn-default">Home</sm>						-->
	<!--				<br>-->
	<!--				<sm>u</sm>						-->
	<!--				<sm>e</sm>						-->
	<!--				<sm>-</sm>						-->
	<!--				<sm>5</sm>-->
	<!--				<sm class="btn-success">l</sm>						-->
	<!--				<sm>p</sm>-->
	<!--				<sm>d</sm>						-->
	<!--				<sm>a</sm>						-->
	<!--				<sm>t</sm>-->
	<!--				<sm class="btn-warning">shift</sm>						-->
	<!--				<sm>a</sm>						-->
	<!--				<sm>t</sm>-->
	<!--				<sm>e</sm>						-->
	<!--				<sm>-</sm>						-->
	<!--				<sm>5</sm>-->
	<!--				<sm class="btn-success">enter</sm>						-->
	<!--				<br>-->
	<!--				<sm class="btn-success">ctrl</sm>						-->
	<!--				<sm class="glyphicon glyphicon-th-large"></sm>						-->
	<!--				<sm>alt</sm>-->
	<!--				<sm class="btn-primary">space</sm>						-->
	<!--				<sm>alt</sm>-->
	<!--				<sm class="glyphicon glyphicon-th-large"></sm>						-->
	<!--				<sm class="glyphicon glyphicon-list-alt"></sm>						-->
	<!--				<sm>ctrl</sm>						-->
	<!--			</div>-->
	<!--		</div>-->
	<!--		<div class="col-md-2">-->
	<!--		</div>-->
	<!--		<div class="col-md-4">-->
	<!--			<div class="col-md-8 lgdef">-->
	<!--				<h5>ADMIN <sub>i</sub></h5>-->
	<!--				<form action="login.php" method="POST">-->
	<!--					<div class="input-group">-->
	<!--						<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>-->
	<!--						<input type="text" id="name" name="username" placeholder="username" class="form-control"  value="admin">-->
	<!--					</div>-->
	<!--					<br>-->
	<!--					<div class="input-group">-->
	<!--						<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>-->
	<!--						<input type="password" id="password" name="password" placeholder="**********" class="form-control" value="admin" >-->
	<!--					</div><br>-->
	<!--					<div class="input-group">-->
	<!--						<input type='submit' name='submit' class="btn btn-info "  value="LOGIN">-->
	<!--					</div><br>-->
	<!--				</form>-->
	<!--				<div class="list-group text-left ">-->
 <!--						<a  class="list-group-item text-success">CRUD ADMIN i READY USE</a>-->
 <!--						<a  class="list-group-item"><input type='hidden' value="lakki">ADD ENTIRES | INSERT</a>-->
 <!--						<a  class="list-group-item">VIEW ENTRIES | SHOW</a>-->
 <!--						<a  class="list-group-item">EDIT ENTRIES | UPDATE</a>-->
 <!--						<a  class="list-group-item">REMOVE ENTRIES | DELETE</a>-->
 <!--						<a  class="list-group-item">STYLED THEME</a>-->
 <!--						<a  class="list-group-item">BOOTSTRAP</a>-->
 <!--						<a  class="list-group-item">PHP & MySQL</a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!--<script src="../assets/js/bootstrap.js"></script>-->
</body>
</html>
<?php
}
?>