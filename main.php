<?php include_once("connection.php"); 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Stream</title>
<link rel="stylesheet" type="text/css" href="s1.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<div id="full"> 
	<div id="inner_full"> 
		<div id="header" align="center"><a href="admindash.php" style="text-decoration: none;color:white;">
		<h1>Attendance Management System</h1></a></div>
		<div id="Body">
		
		<br><br><br><br>
		
		
		<br><br>
		<ul>
		<li><a href="view.php"><b>Computer Science</b></h2></a></li>
		<li><a href="view_it.php"><b>Information Technology</b></a></li>
		
		</ul>
		<br><br><br>
		<ul>
		<li><a href="view_is.php"><b>Bio-Technology</b></a></li>
		<li><a href="view_af.php"><b>Accounts And Finance</b></a></li>
		
		</ul>
		
		</div>
</div>	


</body>
</html>
