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
  #myProgress {
  width: 100%;
  background-color: #ddd;
}
#rcorners1 {
    border-radius: 20px;
    background: #0584C5;
    padding: 10px; 
    width: 800px;
    height: 50px;    
}

#myBar {
  width: 10%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 30px;
  color: white;
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
        <li class="active"><a href="http://localhost/completeproject/HomePage.php">Live Projects</a></li>
        <li><a href="http://localhost/completeproject/DoneProject.php">Done Projects</a></li>
        <li><a href="http://localhost/completeproject/MyProject.php">My Projects</a></li>
    <li><a href="http://localhost/completeproject/recommendation.php">Recommendations</a></li>
	<li><a href="http://localhost/completeproject/MyBackLiveProject.php">Backed Project</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
    <h2>About Crowd Funding</h2>
      
      <p>Crowd Funding helps artists, techies, NGOS, and other creators find the resources and support they need to make their ideas a reality. To date, tens of thousands of creative projects — big and small — have come to life with the support of the Crowd Funding community.</p>
      <h3>Links:</h3>
      <p>https://www.crowdfunding.com</p>
    </div>
    <!-- add your code here akshay-->
  <div class="col-sm-8">
    <div class="wrapper">
  <div class="main app form" id="main"><!-- Main Section-->

    <?php
     $d=(int)$_POST['name'];
    //$str="";
  //echo $d;
  $_SESSION["projid"]=$d;
    $mysqli = new mysqli("localhost","root","","project");
    $query3 = $mysqli->query("SELECT * FROM projectlist WHERE completed = FALSE AND projectId=$d");
  while ($row = mysqli_fetch_row($query3))
  {
    
    echo '<h3 style="border-radius: 20px; background: #0584C5;padding: 15px;width: 250px;height: 75px;      color:white;font-size:28px">'.$row[1].'</h3>';
    echo '<h3 id="rcorners1" style="color:white;font-size:23px">Description:</h3>';
    echo '<h3>'.$row[2].'</h3>';
    echo '<h3 id="rcorners1" style="color:white;font-size:23px">StartDate:</h3>';
    echo '<h3>'.$row[3].'</h3>';
    echo '<h3 id="rcorners1" style="color:white;font-size:23px">EndDate:</h3>';
    echo '<h3>'.$row[4].'</h3>';
	
    date_default_timezone_set("America/New_York");
   
    $date3=date_create(date("Y-m-d"));
    $date1=date_create($row[3]);
    $date2=date_create($row[4]);
     $diff=date_diff($date1, $date2);
    $y = $diff->format("%a days");
    
    $diff1=date_diff($date1, $date3);
    $z = $diff1->format("%a days");
    $t = ($z/$y)*100;
    $str= substr($t,0,4);
	$diff2 = date_diff($date2, $date3);
	$r = $diff2->format("%a days");
	echo '<h3>'.$r.' left to complete the project</h3>';
	echo '<h3 id="rcorners1" style="color:white;font-size:23px">Status bar</h3>';
   echo '<div id="myProgress"><div id="myBar">'.$str.'%</div></div><br>' ;    
  }
   $query4 = $mysqli->query("SELECT * FROM rewards WHERE projectId=$d");
    while ($row = mysqli_fetch_row($query4))
	{
		echo '<h3 id="rcorners1" style="color:white;font-size:23px">Rewards:</h3>';
		echo '<pre><h3>For Fund:'.$row[1].'<br/>Reward:'.$row[2].'<br/>'.$row[3].'</h3></pre>';
		echo '<pre><h3>For Fund:'.$row[4].'<br/>Reward:'.$row[5].'<br/>'.$row[6].'</h3></pre>';
		echo '<pre><h3>For Fund:'.$row[7].'<br/>Reward:'.$row[8].'<br/>'.$row[9].'</h3></pre>';

	}
  
  //Get image data from database
  
  
   /* $result = $mysqli->query("SELECT image FROM images WHERE id = 1");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }*/
    mysqli_close($mysqli);
  
  echo '<form action="payment.php" method="post">
        <input class="btn btn-primary btn-action btn-fill" type="submit" value="Back project">
        </form> ';
   
?>
<script>
   move2(<?php echo $str; ?>);
function move2(percent) {
 
  document.getElementById("myBar").style.width = percent + '%';
  //document.getElementById("prgsbartext").innerHTML = percent + '%';
}
</script>
  


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
