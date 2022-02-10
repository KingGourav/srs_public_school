<?php

$servername='localhost';
$username='root';
$password='';
$dbname='srs';

$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn) {
	// echo "Connection ok";
}
else
{
	die("connection failed".mysqli_connect_error());
}


?>