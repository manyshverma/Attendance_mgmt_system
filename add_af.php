<?php include_once("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Accounts And Finance</title>
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
<div class="panel panel-default container">
<div class="panel-heading">
    <h1 style="text-align: canter;">Attendance Management System</h1>
</div>
<div class="panel-body">

<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
		$name=$_POST['name'];
		$fname=$_POST['fname'];
		$email=$_POST['email'];
		if($name==""||$fname==""||$email==""){
			echo"<div class = 'alert alert-danger'>
			     All fields are required;
				 </div>";
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo"<div class = 'alert alert-danger'>
			     Enter a valid email format;
				 </div>";
		}
		else{
			
		$query="insert into std_af(name,fname,email) values('$name','$fname','$email')";
		$result=$link->query($query);
		if($result){
			echo"<div class = 'alert alert-success'>
			     Data inserted successfully;
				 </div>";
	}}}
       
?>

<form method="post">
    
	<div class="form-group">
	<label for="name">Name</label>
	<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
	<label for="name">Father's Name</label>
	<input type="text" name="fname" class="form-control">
	</div>
	<div class="form-group">
	<label for="name">Email</label>
	<input type="text" name="email" class="form-control">
	</div>
	
		<a href="AF.php" class="btn btn-primary pull-right">Back</a>

	<input type="submit" class="btn btn-primary">
	
</form>
	

</div>
<div class="panel-footer">
    <h1></h1>
</div>
</body>
</html>