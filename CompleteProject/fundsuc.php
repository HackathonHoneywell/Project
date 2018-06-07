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
  <h1>Crowd Funding</h1>
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
        
        <li><a style="color:#0584C5">User Name</a></li>
        <li><a href="http://localhost/completeproject/StartPage.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="http://localhost/completeproject/HomePage.php">Live Projects</a></li>
        <li><a href="http://localhost/completeproject/DoneProject.php">Done Projects</a></li>
        <li><a href="http://localhost/completeproject/MyProject.php">My Projects</a></li>
    <li><a href="http://localhost/completeproject/recommendation.php">Recommendations</a></li>
	<li><a href="http://localhost/completeproject/MyBackLiveProject.php">Backed Project</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    <h2>About Crowd Funding</h2>
      
      <p>Crowd Funding helps artists, techies, NGOS, and other creators find the resources and support they need to make their ideas a reality. To date, tens of thousands of creative projects — big and small — have come to life with the support of the Crowd Funding community.</p>
      <h3>Links</h3>
      <p>https://www.crowdfunding.com</p>
    </div>
    <!-- add your code here akshay-->
  <?php

$mysqli = new mysqli("localhost", "root","","project");
$projectId =(int) $_SESSION["projid"];
//echo $projectId;
$name=$_POST['firstname'];
$amount=(int)$_POST['amount'];

$readproject= "UPDATE projectlist SET  moneyFunded=moneyFunded+'$amount'  WHERE projectId='$projectId'";
$query3 = $mysqli->query($readproject);


$checkquery="SELECT EXISTS (SELECT * FROM cutomerp WHERE projectId=$projectId AND custName='$name')";
if(!$mysqli->query($checkquery))
{
	echo $mysqli->query($checkquery);
$insertquery= "INSERT INTO customerp(projectId,custName,amountP) VALUES('$projectId' ,'$name','$amount')";
$i=$mysqli->query($insertquery);
//echo $i;
$query3 = $mysqli->query("UPDATE `projectlist` set `backers` = `backers`+1 where projectId= $projectId");
}
else
{
	$update="UPDATE customerp SET amountP=amountP+'$amount' WHERE custName='$name' AND projectId='$projectId'";
}

mysqli_close($mysqli);
 echo '<h3 style="color:green"> Funded successfully!!</h3>';
 ?>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Thanks for visiting Crowd Funding</p>
</div>

</body>
</html>
