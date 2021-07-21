<?php
include('Config.php');
session_start();
?>

<html>
<head>
<title>Admin Login</title>
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
		<div id="header" align="center"><h1>Log in to take attendance</h1> </div>
		<div id="header" align="center"><h2>Students click on see attendance</h2></div>
		<div id="Body">
		<br><br><br><br>
		
		<form action="" method="post">
		<table align="center">
		<tr>
		<td width="200px" height="50px"><b>Enter username</b></td>
		<td width="200px" height="50px"><input type="text" name="un" placeholder="eg. Manish "
		style="width: 180px;height: 30px;border-radius: 10px;"></td>
		
		</tr>
		<tr>
		<td width="200px" height="50px"><b>Enter password</b></td>
		<td width="200px" height="50px"><input type="password" name="pass" 
		style="width: 180px;height: 30px;border-radius: 10px;"></td>
		</tr>
		
		<tr>
		
		<td><input type="submit" name="sub" value="Login" align="center" class="btn btn-primary pull-right"</td>
		
		
		</tr>
		
		</table>
		</form>
		<form action="main.php">
		<table align="center">
		<tr>
		<td><input type="submit" name="sub" value="See Attendance"class="btn btn-primary pull-right"</td>
		
		
		
		</tr>
		</table>
		</form>
		<form action="admin_home.php">
		<table align="center">
		<tr>
		<td><input type="submit" name="sub" value="View Notices"class="btn btn-primary pull-right"</td>
		
		
		
		</tr>
		</table>
		</form>

		<?php
		if(isset($_POST['sub']))
		{
			$un=$_POST['un'];
			$ps=$_POST['pass'];
			$q=$con->prepare("SELECT * FROM login WHERE un='$un' && pass='$ps'");
			$q->execute();
			$res=$q->fetchAll(PDO::FETCH_OBJ);
			if($res)
			{
				$_SESSION['un']=$un;
				header('location:index.php');
			}
			else
			{
				echo"<script>alert('Invalid username or Password')</script>";
			}
			
		}
		?>
			
		</div>
		<div id="footer"> </div>
</div>
</div>
</body>
</html>