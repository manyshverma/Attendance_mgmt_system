<?php include_once("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Computer Science</title>
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
	<th>Date</th>
	<th>View</th>
	
	</tr>
	</thead>
	<?php
	$i=0;
	$query="select distinct date from it";
	$result=$link->query($query);
	if($result->num_rows>0){
	
	while($val=$result->fetch_assoc()){
		$i++;
	
	
	
	?>
	
	<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $val['date']; ?></td>
	<td><a href="viewp_it.php?date=<?php echo $val['date'] ?>" class="btn btn-primary">View</td>
	</tr>
	<?php } } ?>
	
	</div>
<div class="panel-footer">
    <h1></h1>
</div>
</body>
</html>