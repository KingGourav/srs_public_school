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
	<title>News Form</title>

	<link rel="stylesheet" href="enquery.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="left">
				<form action="" method="GET">
				<div class="heading">
			<h2>News Form</h2>
			<p>Welcome to the SRS Public School</p>
			<p>Visit my Institute    <a href="index.php" style="text-decoration: none;">  Click here -></a></p>
			
			<img src="bc2.png">
			
	
		</div>
        
          <input type="text" name="id" value="<?php  echo $_GET['d']; ?>" placeholder="Enter your Id">
         <input type="text" name="news1" value="<?php  echo $_GET['a']; ?>" placeholder="Enter your Name">
         <input type="text" name="news2" value="<?php  echo $_GET['b']; ?>" placeholder="Course">
         <input type="text" name="news3" value="<?php  echo $_GET['c']; ?>" placeholder="Enter your Contact No">
       
         
             <div class="box"><button type="submit"name="submit" value="Update">Submit</button></div>
             
     </form>
		</div>
		
		</div>
	</section>
	  
</body>
</html>
<?php
if($_GET['submit'])
{

  $na = $_GET['id'];
  $nb = $_GET['news1'];
  $nc = $_GET['news2'];
  $nd = $_GET['news3'];
 

 

  
  
  $query = "UPDATE news SET NEWS1='$nb' , NEWS2='$nc' , NEWS3='$nd' WHERE  ID='$na' ";
  $data = mysqli_query($conn, $query);
  if ($data) {

    echo "data update successfully";
  }
  else
  {
    echo "not update";
  }
}
else
{
  echo "click to update for save changes";
}


?> 