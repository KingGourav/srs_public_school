<?php
include("connection.php");
$name = $_GET['a'];
$query = "DELETE FROM adminlogin WHERE id='$name'";
$data = mysqli_query($conn , $query);

if ($data) {
	echo "data delete successfully";
	header('location:adminoperation.php');
	
?>

<META HTTP-EQUIV="Referesh" CONTENT="0"; URL="studentoperation.php">


<?php

}
else
{
	echo "not data left";
}

?>