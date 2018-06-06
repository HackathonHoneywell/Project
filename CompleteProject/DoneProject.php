<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="iLand Multipurpose Landing Page Template">
<meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,500,600,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/animate.css">
<!-- Resource style -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<!-- Resource style -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <title>Done projects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0;background-color:#0584C5;color:white;">
  <h1><i>Crowd Funding</i></h1>
  <p>A place to expand your project</p> 
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div style="postion:right">
      <ul style="float:right" class="nav navbar-nav">
        
        <li><a href="#">User Name</a></li>
        <li><a href="http://localhost/completeproject/StartPage.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      <ul class="nav nav-pills nav-stacked">
        <li><a href="http://localhost/completeproject/HomePage.php">Live Projects</a></li>
        <li class="active"><a href="http://localhost/completeproject/DoneProject.php">Done Projects</a></li>
        <li><a href="http://localhost/completeproject/MyProject.php">My Projects</a></li>
    <li><a href="http://localhost/completeproject/recommendation.php">Recommendatios</a></li>
	<li><a href="http://localhost/completeproject/MyBackLiveProject.php">Backed Project</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    <h2>About Crowd Funding</h2>
      <p>Crowd Funding helps artists, techies, NGOS, and other creators find the resources and support they need to make their ideas a reality. To date, tens of thousands of creative projects — big and small — have come to life with the support of the Crowd Funding community.</p>
      <h3>Links</h3>
      <p>https://www.crowdfunding.com</p>
    </div>
    <!-- add your code here akshay-->
  
    
  <!-- Main Section-->

    
      
    <?php
   
$mysqli = new mysqli("localhost", "root","","project");

$query3 = $mysqli->query("SELECT * from projectlist WHERE completed = TRUE ORDER BY likes DESC");
  while ($row = mysqli_fetch_row($query3))
  {
	  $str1 =$row[1];
	  $substr1 = substr($str1, 0,15); 
	   $substr1 = $substr1.".....";
    $str = $row[2];
    $substr =  substr($str, 0,30); 
    $substr = $substr.".....";
    
      echo '<div class="col-sm-8"><div class="wrapper"><div class="main app form" id="main"><div id="pricing" class="pricing-section text-center"><div class="container"><div class="col-md-8 col-sm-8 nopadding"><div class="col-sm-4"><div class="table-left wow fadeInUp" data-wow-delay="0.4s"><div class="pricing-details"><h2>'.$substr1.'</h2><p>'.$substr.'</p>
      
      
      
        <form action="http://localhost/CompleteProject/ReadMore.php" method="post">
        <input type="text" style="display:none" name="name" value="'.$row[0].'"><br>
        <input class="btn btn-primary btn-action btn-fill" type="submit" value="ReadMore">
        </form>     </div></div></div>';
      
    $_SESSION['var']=$row[0];
  }
  
  

mysqli_close($mysqli);
  

?>
    
        
    
          
    <script>
  function fun(){
    window.location = 'http://localhost/CompleteProject/ReadMore.php';
  }
</script> 
              
                      
                
               
              
           
          
      

        
    
      </div>

     </div>         
    </div>
   </div>
   
  </div>
  </div>
  </div>
</div>




</body>
</html>
