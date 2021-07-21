







<?php include_once("connection.php"); 
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin login</title>
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
<script>
function alertme() {
    alert("Attendance Taken!");
}
</script>

<div class="panel panel-default container">






<div
 class="panel-heading">
    <h1 style="text-align: canter;" align="center">Attendance Management System</h1>
		<br><br>

</div>
<?php
		$un=$_SESSION['un'];
		if(!$un)
		{
			header('Location:Login.php');
		}
		
		?>

<div class="panel-body">
    
	<a href="view.php" class="btn btn-primary">View</a>
	<a href="add.php" class="btn btn-primary pull-right">Add</a>	
	<a href="logout.php" class="btn btn-primary pull-right">Logout</a>

	<br><br><br>

<form method="post">	
<table class="table">
	<thead>
	<tr>
	<th>Name</th>
	<th>Father's name</th>
	<th>Email</th>
	
	<th>Attendance</th>
	</tr>
	</thead>
	
	<tbody>
	
	<?php
	$query="select * from emp";
	$result=$link->query($query);
	while($show=$result->fetch_assoc()){
		
	?>
	
	
	
	<tr>
	 <td><?php echo $show['name'];?></td>
	 <td><?php echo $show['fname'];?></td>
	 <td><?php echo $show['email'];?></td>
	 <td>Present<input required type="radio" name="attendance[<?php echo $show['emp_id'] ?>]" value="Present">Absent<input required type="radio" name="attendance[<?php echo $show['emp_id']; ?>]" value="Absent">
	 </td>
     </tr>
	<?php } ?>
	
	<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$att=$_POST['attendance'];
		$b=true;
		$date=date("Y-m-d");
		$query="select distinct date from attendance";
		$result=$link->query($query);$b=false;

				
	
		
			if(!$b){
				foreach($att as $key=> $value){
					if($value=="Present"){
						$query="insert into attendance(value,emp_id,date) values('Present','$key','$date')";
						$insertResult=$link->query($query);
						
						
					}
					else{
						$query="insert into attendance(value,emp_id,date) values('Absent','$key','$date')";
						$insertResult=$link->query($query);
					}
				}
			
			
			
			if($insertResult){
				echo "<div class='alert alert-success'>
				Take Attendance;
				</div>";
				
			
			}
			}
	}
	
			
	
	?>
	</tbody>
	</table>
	<input class="btn btn-primary" type ="submit" onclick="alertme()" value = "SUBMIT">
	</form>
	</div>
		<br><br>

<div class="panel-footer">
    <h1></h1>
</div>
</body>
</html>