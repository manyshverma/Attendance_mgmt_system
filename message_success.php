<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
function ctck()
{
var sds = document.getElementById("dum");
if(sds == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
}
</script> 

</head>

<body>
<div id="header"></div>
<div id="navigation">
  
</div>
<div id="content"><table width="928" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <div id="content_top">
    <div id="main_content">
    <h1>Message Successfull</h1>

    <h3><?php
$host="localhost";
$username="root";
$password="";
$db_name="attnd1";
$tbl_name="message";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");


mysqli_select_db($con,"$db_name")or die("cannot select DB");


$name = $_POST['name'];

$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO $tbl_name(name, email, message) VALUE('$name','$email','$message')";

$result = mysqli_query($con,$sql);


if($result)
{
echo "<p><center>";
echo "";
echo "<br>";
echo "<a href='index.html'><img src='images/services.jpg'></a>";
}
else
{
echo "Error";
echo mysqli_error($con);
}
?></p>
 
</body>
</html>
