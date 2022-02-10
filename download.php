<?php
include("connection.php");
$name = $_GET['a'];


?>








<style>
	::-webkit-scrollbar
{
	width: 12px;
}
::-webkit-scrollbar-thumb
{
	background: linear-gradient(transparent,var(--primary));
	border-radius: 6px;
}




/* fonts            */
@font-face 
{
	font-family: "Raleway-regular";
	src:url(fonts/Raleway-regular.ttf);
}
@font-face 
{
	font-family: "Poppins-Bold";
	src:url(fonts/Poppins-Regular.ttf);
}
@font-face 
{
	font-family: "Poppins-Bold1";
	src:url(fonts/Poppins-Bold.ttf);
}
@font-face 
{
	font-family: "Raleway-medium";
	src:url(fonts/Raleway-Medium.ttf);
}
@font-face 
{
	font-family: "Raleway-bold";
	src:url(fonts/Raleway-Bold.ttf);
}
@font-face 
{
	font-family: "Raleway-semibold";
	src:url(fonts/Raleway-semibold.ttf);
}
@font-face 
{
	font-family: "Raleway-black";
	src:url(fonts/Raleway-Black.ttf);
}
@font-face 
{
	font-family: "Raleway-extrabold";
	src:url(fonts/Raleway-ExtraBold.ttf);
}
/* creating a variable for colors */
:root 
{
	--primary:#4458dc;
	--light:#F0F0F0;
	--secondry:#854fee;
	--title:#141313;
	--text:#777777;
	--border:#201f1f17;
	--gradient:linear-gradient(90deg,#4458dc 0%,#854fee 100%);
	--shadow:0px 10px 30px rgba(118,85,225,0.3);
	--box-shadow:0px 10px 30px rgba(57,56,61,0.205);
	  --gp:#154360;
  --gp2:#4782BA;
}
	body
	{
		display: flex;
		justify-content: center;
		flex-direction: column-reverse;
		align-items: center;
		background: rgba(255,255,255,0.2);
		color: #fff;
		font-family: "Raleway-bold";
	}
	a
	{
		
	text-decoration: none;
		margin: 0rem 3rem;
		padding: 0.8rem 1.7rem;
	font-family: "Raleway-Bold";
	font-size: 1rem;
	position: relative;
	border:none;
	border-radius: 4px;
	background: var(--gradient);
	background-clip: padding-box;
	color: whitesmoke;
	transition: background .6s ease;
	box-shadow: var(--shadow);
cursor: pointer;
	text-transform: uppercase;
	margin-top: 4rem;

	}
</style>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="eye.css">
</head>
<body>
	<a href="download.php?file=<?php echo($name);?>">click here</a>
		<div class="box">
		<div class="eye"></div>
		<div class="eye"></div>
	</div>

	<script type="text/javascript">
		document.querySelector('body').addEventListener('mousemove',eyeball);
		function eyeball(){
			const eye = document.querySelectorAll('.eye');
			eye.forEach(function(eye){
				let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2);
				let y = (eye.getBoundingClientRect().top) + (eye.clientHeight / 2);
				let radian = Math.atan2(event.pageX - x, event.pageY - y);
				let rotation = (radian * (180 / Math.PI) * -1) + 270;
				eye.style.transform = "rotate("+rotation+"deg)"
			});
		}
	</script>
</body>
</html>



<?php

if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = 'image/'.$filename;
	if(!empty($filename)&& file_exists($filepath))
	{
		header("Cache-Control:public");
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachement; filename=$filename");
		header("Content-Type:application/zip");
		header("Content-Transfer-Emcoding:binary");
		readfile($filepath);
		exit;
	}
	else
	{
		echo "This file Does Not Exists";
	}
}



?>


