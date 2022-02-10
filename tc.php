<?php
include "connection.php";

error_reporting(0);

 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Tc Creation Form</title>

	<link rel="stylesheet" href="enquery.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="left">
				<form action="" method="POST" enctype="multipart/form-data">
				<div class="heading">
			<h2>T.C Form</h2>
			<p>Welcome to the SRS Public School</p>
			<p>Visit my Institute    <a href="index.php" style="text-decoration: none;">  Click here -></a></p>
			
			<img src="bc2.png">
			
	
		</div>
        
        
         <input type="text" name="id" value="" placeholder="Enter Id No">
         <input type="text" name="name" value="" placeholder="Enter Student Name">
         <input type="text" name="pname" value="" placeholder="Enter Parents Name">
         <input type="text" name="tcno" value="" placeholder="Enter TC No">
            <input type="file" name="uploadfile" value="" >

         
             <div class="box"><button type="submit"name="submit" value="Submit">Submit</button></div>
             
     </form>
		</div>
		
		</div>
	</section>
	  
</body>
</html>

<?php

if ($_POST['submit']) {
	

$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['pname'];
$d = $_POST['tcno'];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".$filename;
move_uploaded_file($tempname, $folder);




if (  $a!="" && $b!=""&& $c!="" && $d!="" && $folder!="") {


$query = "INSERT INTO tc VALUES ('$a','$b','$c','$d','$folder')";
$data = mysqli_query($conn, $query);

if ($data) {
	?>
	<script type="text/javascript">alert("Data Insert successfully....");</script>
<?php

}
else
{
 die("Data not inserted check your form".mysqli_connect_error());
}

}

}

  ?>