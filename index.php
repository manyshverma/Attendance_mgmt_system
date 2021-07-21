<?php include_once("connection.php"); 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Admin login</title>
<link rel="stylesheet" type="text/css" href="s1.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style>
body {
        background-image: url("bgimage.jpg"); no-repeat; background-size:cover;
} 

</style>
</head>
<body>
<div id="full"> 
	<div id="inner_full"> 
		<div id="header" align="center"><a href="admindash.php" style="text-decoration: none;color:white;">
		<h1>Attendance Management System</h1></a></div>
		<div id="Body">
		
		<br><br><br><br>
		<?php
		$un=$_SESSION['un'];
		if(!$un)
		{
			header('Location:Login.php');
		}
		
		?>
		
		<br><br><br><br>

		<ul>
		<li><a href="stream.php"><b>Select Stream</b></h2></a></li>
		<li><a href="main.php"><b>View</b></a></li>
		<li><a href="contact.php"><b>Add Notice</b></a></li>

		
		<li><a href="logout.php"><b>Logout</b></a></li>
		
		</ul>
		
		</div>
</div>	


</body>
</html>
