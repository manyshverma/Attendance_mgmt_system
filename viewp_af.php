<?php include_once("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
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
   
	
<form method="post">	
<table class="table">
	<thead>
	<tr>
	<th>Sr. No.</th>
	<th>Name</th>
	<th>Father's name</th>
	<th>Email</th>
	<th>Attendance</th>
	
	</tr>
	</thead>
	<?php
	$date=$_GET['date'];
	echo"Attendance for $date \r\n\n";
	if($_GET['date']){
		$date=$_GET['date'];
	
	$query="select std_af.*,af.* from af 
	inner join std_af on af.emp_id=std_af.emp_id and
	af.date='$date'";
	$result=$link->query($query);
	if($result->num_rows>0){
		$i=0;
	
	
	while($val=$result->fetch_assoc()){
		$i++;
	
	
	
	?>
	
	<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $val['name']; ?></td>
	<td><?php echo $val['fname']; ?></td>
	<td><?php echo $val['email']; ?></td>
	
	<td>
	Present<input type="radio" value="Present" <?php 
	if($val['value']=='Present')
		echo "checked";
	?>
	>
	Absent<input type="radio" value="Absent" <?php 
	if($val['value']=='Absent')
		echo "checked";
	?>
	>
	
	</td>
	
	</tr>
	<?php }} } ?>
	
	</div>
<div class="panel-footer">
    <h1></h1>
</div>
