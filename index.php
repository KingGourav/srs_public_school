<?php


 


include("connection.php");
error_reporting(0);
 
 $query = "SELECT `news1`, `news2`, `news3` FROM `news`";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


  while ($result = mysqli_fetch_assoc($data)) {

$b=$result['news1'];
$c=$result['news2'];
$d=$result['news3'];





   
}







  ?>










<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>SRS Public School</title>
	<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" type="text/css" href="slick.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://kit.fontawesome.com/9d33041dbc.js" crossorigin="anonymous"></script>

<script>
      window.onload=function()
      {
        document.getElementById('load1').style.display="none";
        document.getElementById('tom1').style.display="block";
      
      }
    </script>
    <style>
      .tom
      {
        display: none;
      }
      .load
      {
        display: flex;
        align-items: center;
        justify-content: center;

      }

    </style>

</head>
<body>
	 <div class="load" id="load1">
      <img src="loader.gif">
    </div>
    
    <div class="tom" id="tom1">
	<!-- making side navigation bar -->
<div class="main-wrapper1">

		<div class="nav-background">
			<div class="mobile-logo" data-aos="fade-up"><img src="img/logo.png" alt=""></div>
			<div class="mobile-nav">
				<div class="cart flex align-item ">
					<div class="bone">
						<i class="fab fa-angellist"></i>SRS<span>Public School</span>
					</div>
				</div>
				<div class="nav-top" data-aos="fade-up">
					<ul>
						<li><i class="fas fa-home" style="color: var(--primary);"></i>  <a href="Index.php">Home</a></li>
						<li><i class="fas fa-bookmark" style="color: var(--primary);"></i>  <a href="admission.html">Addmision</a></li>
						<li><i class="fas fa-trophy"style="color: var(--primary);"></i>  	<a href="#fact">Facility</a></li>
						<li><i class="fas fa-server"style="color: var(--primary);"></i>  	<a href="accademic.html">Accademic</a></li>
						<li><i class="fas fa-video"style="color: var(--primary);"></i> 	<a href="#">Youtube</a></li>
				<li><i class="fas fa-users-cog"style="color: var(--primary);"></i> 	<a href="#about">About</a></li>
                        <li><i class="fas fa-sign-out-alt"style="color: var(--primary);"></i> 	<a href="#contact">Contact</a></li>
<li><a href="#" >Founder</a></li>
				<li><a href="founder.html" >Founder</a></li>
				<li><a href="inspiration.html">Our Inspiration</a></li>
						<li><a href="director.html">Director Desk</a></li>
								<li><a href="vision.html">Our Vision</a></li>
							
									<li><a href="infrastructure.html">Infrastructure</a></li>
											<li><a href="downloadtc.php">TC Issued</a></li>
										
												<li><a href="#gallery">Photo Gallery</a></li>
												<li><a href="#">Video Gallery</a></li>
										
					</ul>

				</div>
				<div class="contact" data-aos="fade-up">
					
					<div>
						<h5>Always remember </h5>
						<h6  >Imagination is better then Knowledge</h6>
					</div>
				</div>
				<div class="time" data-aos="fade-up">
					
					<div>
						<h5>Enquery:-</h5>
						<h6>Mail : corecomputer143@gmail.com</h6>
					</div>
				</div>
			</div>

		</div>

		<div class="screen">

			<div class="nav-trigger">
				<i class="fas fa-bars" style="color: #000; font-size: 2rem;"></i>
			</div>

			<div class="screen-area">
	<div class="fixed">
	<header>
	<div class="container">
		<div class="slider">
			<div class="card">
				<i class="far fa-bell" style="font-weight: bold;margin-right: 0.8rem;"></i>
				<p><?php echo $b;?></p>
			</div>
				<div class="card">
					<i class="far fa-bell" style="font-weight: bold;margin-right: 0.8rem;"></i>
				<p><?php echo $c;?></p>
			</div>
				<div class="card">
					<i class="far fa-bell" style="font-weight: bold;margin-right: 0.8rem;"></i>
				<p><?php echo $d;?></p>
			</div>
				<div class="card">
					<i class="far fa-bell" style="font-weight: bold;margin-right: 0.8rem;"></i>
				<p>Addmision are open for batch 2021</p>
			</div>
		</div>
	</div>
	</header>
	<section class="nav">
		<div class="container">
			<div class="wer">
				<img src="logo.png">
			</div>
			<div>
				<a href="index.php" class="active">Home</a>
				<a href="admission.html">Addmision</a>
						<a href="#fact">Facility</a>
							
							
									<a href="accademic.html">Accademic</a>
											<a href="#">Youtube</a>
											<a href="#about">About</a>
											<a href="#contact">Contact</a>
			</div>
			
		</div>
		<hr style="color: var(--text);background: var(--text);">
			<div class="container">
			
			<div>
				<a href="founder.html" >Founder</a>
				<a href="inspiration.html">Our Inspiration</a>
						<a href="director.html">Director Desk</a>
								<a href="vision.html">Our Vision</a>
							
									<a href="infrastructure.html">Infrastructure</a>
											<a href="downloadtc.php">TC Issued</a>
										
												<a href="#gallery">Photo Gallery</a>
												<a href="#">Video Gallery</a>
										
			</div>
			
		</div>
	</section>

</div>
	<section class="top">
		<div class="container">
			<h2>Welcome to SRS <span>Public School</span></h2>
			<p>Imagination is better then Knowledge</p>
			<button class="btn1">Read More</button>
		</div>
	</section>


<section class="about" id="about">
	<h2>About Us</h2>
	<div class="container">
		<div class="left">
			<img src="a.png">
		</div>
		<div class="right">
			<h3> SRS PUBLIC SCHOOL - Nurturing Excellence</h3>
			<p>SRS Public School is a centre of excellence, offering quality Education. We welcome each one of you to our 'Campus' where latest technology, innovative teaching methodology and quality education are blended together to create a unique learning experience. SRS Public School is affiliated with Central Board Of Secondary Education, New Delhi...</p>
			<br>
			<p>The school has been started to impart education based on rich Indian heritage along with the knowledge of Arts, Commerce, Science and Technology of the modern age with an objective to enrich the future talents of this mother land, full of self-confidence with good conduct and sound character. The school is striving hard to provide excellence in the sacred field of learning and to fulfill the long-felt need of country in its true sense. The school management has dedicated itself with heart and soul to the cause of education to eradicate illiteracy even in remote areas and with this objective has joined hands with the other like minded societies, permitted them to use its logo and goodwill as well as guide and coach for imparting a class education without benefitting itself in any manner.</p>

		</div>
	</div>
		<center><button class="btn2">View More</button></center>

</section>

	
</section>
<section class="snow" id="achivenments">
	<h2><i class="fas fa-trophy"></i> Our Achivenments</h2>
	<div class="container">
		<div class="slider1">
			<div class="card">
				<img src="top.png">
				<div>
					<h4>Golden Trophy</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="card">
				<img src="top.png">
				<div>
					<h4>Golden Trophy</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="card">
				<img src="top.png">
				<div>
					<h4>Golden Trophy</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="card">
				<img src="top.png">
				<div>
					<h4>Golden Trophy</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="snow dm" id="event">
	<h2 style="color:#34495E;"><i class="fas fa-volleyball-ball"></i> Our Sports/Events</h2>
	<div class="container">
		<div class="slider1">
			<div class="card"style="box-shadow: var(--shadow);">
				<img src="top.png">
				<div>
					<h4>Golden Trophy</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="card"style="box-shadow: var(--shadow);">
				<img src="top.png">
				<div>
					<h4>Golden Trophy</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="card"style="box-shadow: var(--shadow);">
				<img src="top.png">
				<div>
					<h4>Golden Trophy</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
			<div class="card"style="box-shadow: var(--shadow);">
				<img src="top.png">
				<div>
					<h4>Golden Trophy</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor incididunt ut labore et dolore magna aliqua</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="fact" id="fact">
	<div class="container">
		<div class="left">
			<div class="box">
				<div class="circle">
					<i class="fas fa-graduation-cap"></i>
				</div>

				<div><h6>Top Quality Education</h6>
<p>We are providing the better quality education.</p>
				</div>
				
			</div>
				<div class="box">
				<div class="circle">
				<i class="fas fa-laptop-code"></i>
				</div>

				<div><h6>Computer Lab </h6>
<p>We are providing the better quality education.</p>
				</div>
				
			</div>
				<div class="box">
				<div class="circle">
				<i class="fas fa-book"></i>
				</div>

				<div><h6>Library</h6>
<p>We are providing the better quality education.</p>
				</div>
				
			</div>
		</div>
		<div class="right">
				<div class="box">
				<div class="circle">
				<i class="fas fa-bus"></i>
				</div>

				<div><h6>Transport Management</h6>
<p>We are providing the better quality education.</p>
				</div>
				
			</div>
				<div class="box">
				<div class="circle">
			<i class="fas fa-user-graduate"></i>
				</div>

				<div><h6>Maintain Descipline</h6>
<p>We are providing the better quality education.</p>
				</div>
				
			</div>
				<div class="box">
				<div class="circle">
				<i class="fas fa-university"></i>
				</div>

				<div><h6>Latest Pattern</h6>
<p>We are providing the better quality education.</p>
				</div>
				
			</div>
		</div>
	</div>
		
	

</section>


<section class="youtube" id="youtube">
	<h2>Our Latest Video</h2>
	<div class="container">
		<div class="left">
			<iframe   src="https://www.youtube.com/embed/EV--VAbvf1c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="right">
			<h3>Inspirational web project</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. </p>
		</div>
	</div>
	
</section>




<section class="student">
	<div class="container">
		<div class="left">
			<div class="box">
					<i class="fas fa-user-graduate"></i>
						<h5 class="count">300</h5>
						<h6>+Students</h6>
			</div>
			<div class="box">
						<i class="fab fa-youtube"></i>
							<h5 class="count">3000</h5>
						<h6>Youtube Followers</h6>
			</div>
		</div>
			<div class="right">
			<div class="box">
						<i class="far fa-calendar-check"></i>
							<h5 class="count">230</h5>
						<h6>Campus Events</h6>
			</div>
			<div class="box">
						<i class="fas fa-university"></i>
							<h5 class="count">100</h5>
						<h6>Activities</h6>
			</div>
		</div>
	</div>
	
</section>




<section class="contact" id="contact">
	<h1>Contact us</h1>
	<div class="container">
		<div class="left">
			     <div>
			     	<div class="circle">
				<i class="fas fa-phone-alt" style="color: var(--primary);font-size: 1.3rem;"></i>
				</div>
					<div>
						<span style="color: var(--secondary);font-weight: bold;">Call us:</span>
						<span>(+91) 9415 4533 34</span>
					</div>
				</div>
				<div>
					  	<div class="circle">
			<i class="fas fa-envelope" style="color: var(--primary);font-size: 1.3rem;"></i>
				</div>
					<div>
						<span style="color: var(--secondary);font-weight: bold;">E-mail ::</span>
						<span>Support@freshmeal.com</span>
					</div>
				</div>
				<div>
					  	<div class="circle">
				<i class="fas fa-clock" style="color: var(--primary);font-size: 1.3rem;"></i>
				</div>
					<div>
						<span style="color: var(--secondary);font-weight: bold;">Working Hours:</span>
						<span> Mon - Sat (8.00am - 12.00am)</span>
					</div>
				</div>
					<div>
					  	<div class="circle"style="color: var(--primary);font-size: 1.3rem;">
				<i class="fas fa-map-marker-alt"></i>
				</div>
					<div>
						<span style="color: var(--secondary);font-weight: bold;">Address:</span>
						<span> Near Mauram Mandi,Korihara,Lalganj,<br>Raebareli,Uttar Pradesh
						</span>
					</div>
				</div>

		</div>
		<div class="right">
			<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.284293090999!2d80.96056401439895!3d26.154869198599524!2m3!1f0!2f0!3f0!3m2!1i1024!2
i768!4f13.1!3m3!1m2!1s0x399b83e687e9da01%3A0xcc3a9771982f4799!2sSRS%20PUBLIC%20SCHOOL%20KORIHARA!5e0!3m2!1sen!2sus!4v1634987213322!5m2!1sen!2sus"></iframe><a href="https://www.fridaynightfunkin.net/">FNF Download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div></div>
    </div>
	
	
</section>

<section class="gallery" id="gallery">
	<h2>Our Gallery</h2>
	<div class="container gallery1 ">
		<div class="left ">
			<a href="top.png" target="blank"><img src="top.png"></a>
			<a href="top.png"><img src="top.png"></a>

		</div>
		<div class="right">
			<a href="top.png"><img src="top.png"></a>
			<a href="top.png"><img src="top.png"></a>
		</div>
	</div>
		<div class="container gallery1">
		<div class="left">
			<a href="top.png"><img src="top.png"></a>
			<a href="top.png"><img src="top.png"></a>

		</div>
		<div class="right">
			<a href="top.png"><img src="top.png"></a>
			<a href="top.png"><img src="top.png"></a>
		</div>
	</div>
</section>
 <div class="icons1">
<ul>
  <a href="#"><li class="facebook"><i class="fab fa-facebook"></i></li></a>
   <a href="#"><li class="twitter"><i class="fab fa-twitter"></i></li></a>
    <a href="https://www.youtube.com/channel/UCV0C0oewU-Jnsg58nz4CX_Q"><li class="youtube1"><i class="fab fa-youtube"></i></li></a>
     <a href="#"><li class="linkedin"><i class="fab fa-linkedin"></i></li></a>
       <a href="#"><li class="instagram"><i class="fab fa-instagram"></i></li></a>
</ul>
  </div>

<footer>
	<div class="container">
		<div class="left">
			<div>
				<img src="final.jpg">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris</p>
			</div>
			<div>
				<h2>Our links</h2>
				<a href="#">Courses</a>
				<a href="#">Tutorials</a>
				<a href="#">Posts</a>
				<a href="#">Feedback</a>
				<a href="#">Cantact us</a>
			</div>
		</div>
		<div class="right">
			<div>
				<h2>Important terms</h2>
				<a href="#">Student login</a>
				<a href="#">Student Dashboard</a>
				<a href="#">Search Certificate</a>
				<a href="#">Testinomials</a>
				<a href="#">Source code</a>
			</div>
			<div>
				<h2>Credintials</h2>
				<a href="#">Youtube</a>
				<a href="#">GitHub</a>
				<a href="#">Download</a>
				<a href="#">Facebook</a>
					<a href="login1.php">Admin </a>
			</div>
		</div>
	</div>
</footer>




</div>
</div>
</div>

</div>


<!-- 

student
Books
events
visitors -->
























	<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick.min.js"></script>

<script type="text/javascript">
	  $(document).ready(function(){
      $('.slider').slick({
      
              autoplay:true,slidesToShow:1,slideToScroll:1,prevArrow:".prev-btn",
              nextArrow:".next-btn",
              responsive:[
              {
              	breakpoint:990,
              	settings:{
              		slidesToShow:1,
              }
              	 

              }, {
              	breakpoint:768,
              	settings:{
              		slidesToShow:1,
              	}
              }],        /* hom many slides you want  to show  at the single time */
      }); $('.slider1').slick({
      
              autoplay:true,slidesToShow:3,slideToScroll:1,prevArrow:".prev-btn",
              nextArrow:".next-btn",
              responsive:[
              {
              	breakpoint:992,
              	settings:{
              		slidesToShow:2,
              }
              	 

              }, {
              	breakpoint:760,
              	settings:{
              		slidesToShow:1,
              	}
              }],        /* hom many slides you want  to show  at the single time */
      });

 $('.nav-trigger').click(function(){
	$('.screen').toggleClass('scaled');
})
       

       });

</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/jquery.waypoints.min.js" integrity="sha512-f/gxy4xAjuGEIf/ujexcNI906CTS+kfw40QCyG/rEMKELvCIFaTOY+dfdn7M/eNsiMreG3SStjgFr9q8Me9Baw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	$('.count').counterUp({
    delay: 10,
    time: 2000
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js" integrity="sha512-C1zvdb9R55RAkl6xCLTPt+Wmcz6s+ccOvcr6G57lbm8M2fbgn2SUjUJbQ13fEyjuLViwe97uJvwa1EUf4F1Akw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('.gallery1').magnificPopup({
			type:'image',
			delegate:'a',
			gallery:{
				enabled:true,
			}
		});
	});
</script>




















</body>
</html>
<style>
  .icons1
{
  top: 70%;
  left: 0;
  transform: translateY(-50%);
  position: fixed;
  z-index: 100;
}
.icons1 ul
{
  padding: initial;
}
.icons1 ul li
{
  height: 40px;
  width: 40px;
  list-style-type: none;
  padding-left: 12px;
  padding-top: 6px;
  margin-top: 5px;
  color: #fff;
  
}
.facebook
{
  background:var(--primary);
}
.twitter
{
  background:var(--primary);
}
.youtube1
{
 background:var(--primary);
}
.linkedin
{
  background:var(--primary);
}
.instagram
{
  background:var(--primary);
}
.icons ul li:hover
{
  padding-left: 30px;
  width: 80px;
  transition: 1s;
}
</style>