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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Resource style -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <title>Read more</title>
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
#rcorners1 {
    border-radius: 20px;
    background: #0584C5;
    padding: 10px; 
    width: 800px;
    height: 50px;    
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0;background-color:#0584C5;color:white;">
  <h1><i>Crowd Funding</i></h1>
  <p>A place for startups</p> 
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
	<div class="col-sm-8">
		<div class="wrapper">
  <div class="main app form" id="main"><!-- Main Section-->

    <?php
	
 $x=$_POST['name'];
$mysqli = new mysqli("localhost", "root","","project");
$query3 = $mysqli->query("SELECT * from projectlist where completed = TRUE AND projectId=$x");
$query4 = $mysqli->query("SELECT projectName from projectlist");//where 'category'=" should be added
	while ($row = mysqli_fetch_row($query3))
	{
   $strDt = date_create($row[3]);
    $exEndDt = date_create($row[4]);
    $endDt = date_create(date("Y-m-d"));
    $diff = date_diff($strDt,$exEndDt);
    $totDays = $diff->format("%a days");
    $diff1 = date_diff($strDt,$endDt);
    $comDays = $diff1->format("%a days");
    $sucPer = ($totDays/$comDays)*100;
	$strat = substr($sucPer,0,5);
		echo '<h3 style="border-radius: 20px; background: #0584C5;padding: 15px;width: 250px;height: 70px;      color:white;font-size:28px">   '.$row[1].'</h3>';
		echo '<h3 id="rcorners1" style="color:white;font-size:23px">Description:</h3>';
		echo '<h3>'.$row[2].'</h3>';
		echo '<h3 id="rcorners1" style="color:white;font-size:23px">Recognition:</h3>';
		echo '<h3 style="color:green">Success percentage:'.$strat.'</h3>';
    echo '<h3>No. of backers:'.$row[10].'</h3>';//should be edited
		echo '<h3>Likes:'.$row[5].'</h3>';
		echo '<h3>Total amount funded:'.$row[6].'</h3>';
	
		echo '<h3 id="rcorners1" style="color:white;font-size:23px">Contact Information:</h3>';
		echo '<h3>ID:'.$row[0].'</h3>';
		echo '<h3>e-mail:'.$row[12].'</h3>';
		echo '<h3 id="rcorners1" style="color:white;font-size:23px">Willing to buy?</h3>';
		echo '<h3>link:<a href='.$row[13].'>'.$row[13].'</a></h3>';
	}
 
	

mysqli_close($mysqli);
	

?>
   </div>
   
  </div>
  </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Thanks for visiting Crowd Funding</p>
</div>

</body>
</html>
