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
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="http://localhost/completeproject/HomePage.php">Live Projects</a></li>
        <li><a href="http://localhost/completeproject/DoneProject.php">Done Projects</a></li>
		<li class="active"><a href="http://localhost/completeproject/MyProject.php">My Projects</a></li>
		<li><a href="http://localhost/completeproject/recommendation.php">Recommendations</a></li>
		<li><a href="http://localhost/completeproject/MyBackLiveProject.php">Back Projects</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
	  <h2>About Crowd Funding</h2>
      
      <p>Crowd Funding helps artists, techies, NGOS, and other creators find the resources and support they need to make their ideas a reality. To date, tens of thousands of creative projects — big and small — have come to life with the support of the Crowd Funding community.</p>
      <h3>Links</h3>
      <p>https://www.crowdfunding.com</p>
    </div>
    <!-- add your code here akshay-->
	<div class="col-sm-8">
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
        
      <ul class="nav navbar-nav">
	    <li ><a href="http://localhost/completeproject/MyProject.php">LiveProject</a></li>
        <li><a href="http://localhost/completeproject/DoneProject.php" >DoneProjects</a></li>
		<li><a href="http://localhost/completeproject/CreateProject.php">CreateProjects</a></li>
      </ul>
    </div>	
  </div>
</nav>

	<div class="col-sm-8">
		<div class="wrapper">
  <div class="main app form" id="main"><!-- Main Section-->

    <div id="pricing" class="pricing-section text-center">
      <div class="container">
	  
        <div class="col-md-8 col-sm-8 nopadding">

<?php
$title=$_POST['title'];
$description=$_POST['description'];


$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$requiredfunds=(int)$_POST['requiredfunds'];

$phno=(int)$_POST['phno'];
$emailid=$_POST['emailid'];

$fund1=(int)$_POST['fund1'];
$reward11=$_POST['reward11'];
$reward12=$_POST['reward12'];

$fund2=(int)$_POST['fund2'];
$reward21=$_POST['reward21'];
$reward22=$_POST['reward22'];

$fund3=(int)$_POST['fund3'];
$reward31=$_POST['reward31'];
$reward32=$_POST['reward32'];

$fund4=(int)$_POST['fund4'];
$reward41=$_POST['reward41'];
$reward42=$_POST['reward42'];

$accnumber=(int)$_POST['accnumber'];
$accname=$_POST['accname'];
$acccode=$_POST['ifsccode'];

$projectid=(int)$_SESSION["iid"];
//update queries
$mysqli = new mysqli("localhost", "root","","project");
$updateprojectquery="UPDATE projectlist SET `projectName`='$title',`description`='$description',fromD='$fromdate',toD='$todate',amountN='$requiredfunds',phoneNo='$phno',email='$emailid' WHERE projectId='$projectid'";

if($mysqli->query($updateprojectquery )==true)
{

}
else
{
	
}


$insertaccountdetails="UPDATE account SET cardHolderName='$accname',accountNo='$accnumber',IFSC='$acccode' WHERE projectId='$projectid'";
if($mysqli->query($insertaccountdetails )==true)
{

}
else
{
	
}


$insertrewards="UPDATE rewards SET fund1='$fund1',reward11='$reward11',reward12='$reward12',fund2='$fund2',reward21='$reward21',reward22='$reward22',fund3='$fund3',reward31='$reward31',reward32='$reward32',fund4='$fund4',reward41='$reward41',reward42='$reward42' WHERE projectId='$projectid'";
if($mysqli->query($insertrewards )==true)
{
	
}
else
{
	
}
?>

<h1 style="color:MediumSeaGreen;" >EDITED SUCCESSFULLY</h1>		
		
      </div>

     </div>         
    </div>
   </div>
   
  </div>
  </div>
  </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
</script>

</body>
</html>


