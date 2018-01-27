<?php
require('login/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   	<title>Admin -SecureSense</title>
	<meta name="robots" content="noindex, nofollow">
  	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
  	<link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
  	<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		html,body{width:100%;height:100%; margin:0px;}
                .fix_nav{margin-top:10%;}
		.win_by_lakshmaji{padding:3em 0em;text-align: center;margin:1.5em 1em;text-shadow:5px 5px 10px black;font-size:18px;}
.wrapper{line-height:12;}

a:hover{text-decoration:none;}
	</style>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top"style="background: #000000;"">
  	<div class="container-fluid" style="height: auto;>
    	<div class="navbar-header">
		<a class="navbar-brand">
          		<span class="glyphicon glyphicon-home" style="font-size:1.1 em"><i> SecureSense</i> Administrator Dashboard</span>
      		</a>
 	
    	<div class="collapse navbar-collapse" id="myNavbar">
	      	<ul class="nav navbar-nav navbar-right">
        		<li ><p style="margin-top:10%;"><br><i style="font-size:8px;"></i></p></li>
        		<li><a href="login/logout.php"><span class="glyphicon glyphicon-off" style="font-size:2.5em"></span></a></li>
      		</ul>
    	</div>
  	</div>
</nav>

  
<div class="fix_nav">
</div>
<div class="container">
    <form action="search.php" method="GET">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>
<div class="row ">

					<?php
						include('connection.php');
						$connection = new createConnection(); 			//created a new object
						$connection_ref = $connection->connectToDatabase();
						// $connection->selectDatabase();
					   	$result = mysqli_query($connection_ref, 'SHOW TABLES');
   						if($result)
						{
							$break_line=0;
							while($table = mysqli_fetch_array($result))	// go through each row that was returned in $result 
							{ 	
								echo "<div class='col-md-4 win_by_lakshmaji' style='background-color:rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).",1);'><a  href='choice.php?dummy=".base64_encode($table[0])."' class='text-uppercase win_by_lakshmaji' style='color:#fff;'>".$table[0]."</a></div>";
								$break_line++;
								if($break_line==4 || $break_line==8 || $break_line==12) 
								{
									echo "</div><div class='row'>";
								}	
							} 
						}
						else
						{
							echo 'Error displaying tables';
						}

					?>


</div>
</div>

</body>
</html>
