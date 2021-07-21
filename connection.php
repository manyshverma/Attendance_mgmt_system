<?php
$host="localhost";
$dbname="attnd1";
$user="root";
$pass="";

$link=new mysqli($host,$user,$pass,$dbname);
if($link){
	echo "<div align='center'>CONNECTION SUCCESSFULL!</div>";
}
else{
	echo "error in connection";
}

?>