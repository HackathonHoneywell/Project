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
        <li><a href="#">Logout</a></li>
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
		<li><a href="#">Recommendatios</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
	  <h2>About Crowd Funding</h2>
      <h5>Images:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
    </div>
    <!-- add your code here akshay-->
	<div class="col-sm-8">
		<div class="wrapper">
  <div class="main app form" id="main"><!-- Main Section-->

    <?php
	
 $x=$_POST['name'];
$mysqli = new mysqli("localhost", "root","","doneproject");
$query3 = $mysqli->query("SELECT * from projectlist where projectId=$x");
$query4 = $mysqli->query("SELECT projectName from projectlist");//where 'category'=" should be added
	while ($row = mysqli_fetch_row($query3))
	{
   $strDt = date_create($row[5]);
    $exEndDt = date_create($row[6]);
    $endDt = date_create($row[7]);
    $diff = date_diff($strDt,$exEndDt);
    $totDays = $diff->format("%a days");
    $diff1 = date_diff($strDt,$endDt);
    $comDays = $diff1->format("%a days");
    $sucPer = ($totDays/$comDays)*100;
		echo '<h3 style="border-radius: 20px; background: #0584C5;padding: 15px;width: 250px;height: 68px;      color:white;font-size:28px">   '.$row[1].'</h3>';
		echo '<h3 id="rcorners1" style="color:white;font-size:28px">Description:</h3>';
		echo '<h5>'.$row[2].'</h5>';
		echo '<h3 id="rcorners1" style="color:white;font-size:28px">Recognition:</h3>';
		echo '<h5 style="color:green">Success percentage:'.$sucPer.'</h5>';
    echo '<h5>No. of backers:'.$row[4].'</h5>';//should be edited
		echo '<h7>Likes:'.$row[4].'</h7>';
		echo '<h3 id="rcorners1" style="color:white;font-size:28px">Contact Information:</h3>';
		echo '<h7>name:'.$row[3].'</h7>';
		echo '<h5>ID:'.$row[3].'</h5>';
		echo '<h5>e-mail:'.$row[3].'</h5>';
		echo '<h3 id="rcorners1" style="color:white;font-size:28px">Willing to buy?</h3>';
		echo '<h5><a href='.$row[8].'>link:'.$row[8].'</a></h5>';
	}
  echo '<h3 id="rcorners1" style="color:white;font-size:28px">Similar projects</h3>';
  while ($row = mysqli_fetch_row($query4))
  {
    echo '<h5>'.$row[0].'</h5>';
  }
	

mysqli_close($mysqli);
	

?>
   </div>
   
  </div>
  </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
