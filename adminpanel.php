<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM tc";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="adminpanel.css">
    <link rel="stylesheet" type="text/css" href="display.css">
<script src="https://kit.fontawesome.com/9d33041dbc.js" crossorigin="anonymous"></script>
    <title>Admin Panel</title>
  </head>
  <body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="#">SRS Public School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TC
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tc.php">Generate TC</a></li>
            <li><a class="dropdown-item" href="downloadtc">Display TC</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tcoperation.php">TC Operation</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            News Section
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="updatenews.php">Generate News</a></li>
            <li><a class="dropdown-item" href="news.php">Display News</a></li>
          
          </ul>
        </li>

             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login Credintials
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="adminlogin.php">Login usrer</a></li>
            <li><a class="dropdown-item" href="adminoperation.php">Display Users</a></li>
          
          </ul>
        </li>
       <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Logout</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

<section>
    <div class="container">
     
      <div class="one">
        <h2><i class="fas fa-user-graduate"></i> Total No of T.C <span><?php echo ($total); ?></span></h2>
        <!-- <a href="export.php"><i class="fas fa-file-excel"></i> Export Excel</a> -->
  <form action="" method="GET"> <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" style="border: none;outline: none;border-bottom: 2px solid var(--border);"><button type="submit" value="Submit" style="margin: 0 1rem;background: #fff;border:none;outline: none;padding: 0.5rem 0.5rem;box-shadow:var(--shadow);color: var(--secondry);font-weight: bold;">Search</button></form>
      </div>
      <?php
if (isset($_GET['search'])) {
$se = $_GET['search'];

$query = "SELECT * FROM tc WHERE CONCAT(id,name,pname,tcno) LIKE '%$se%'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


}
else
{
  
}







      ?>
  
      <div class="tab">
        
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" colspan="1" style="margin-left: 1rem;text-align: center;">Operation</th>
       <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Parents Name</th>
      <th scope="col">Tc No</th>
          <th scope="col">TC Image</th>
       
     
     
    </tr>
  </thead>
  <tbody>
    
<?php


if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {
  echo " <tbody>
    <tr>
   

     <td><a class='btn btn-danger' href='deletetc.php?a=$result[id]'onclick='return checkdelete()'>Delete</a></td>
   
<td>".$result['id']."</td>
<td>".$result['name']."</td>
<td>".$result['pname']."</td>
<td>".$result['tcno']."</td>
 <td><img src='".$result['image']."' height='100px' width='100px' /></td>



    </tr>
   
  </tbody>";
}
  
}
else
{
  echo "no Record found !";
}

?>
  
  </tbody>
</table>
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
      </div>
    </div>
  </div>
</footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>