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
        <li ><a href="http://localhost/completeproject/HomePage.php">Live Projects</a></li>
        <li><a href="http://localhost/completeproject/DoneProject.php">Done Projects</a></li>
		<li class="active"><a href="http://localhost/completeproject/MyProject.php">My Projects</a></li>
		<li><a href="http://localhost/completeproject/recommendation.php">Recommendatios</a></li>
		 <li ><a href="http://localhost/completeproject/MyBackLiveProject.php">Backed Project</a></li>
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
	    <li><a  href="MyProject.php" >LiveProject</a></li>
        <li><a href="MyDoneProject.php">DoneProjects</a></li>
		<li><a style="color:white" href="CreateProject.php">CreateProjects</a></li>
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
<link rel="stylesheet" href="trr.css">
<div class="section-form">
    <form method="post" action="http://localhost/completeproject/CreatedSuccessfully.php">
        <div class="intro">
            <h2>New Project</h2>
        </div>
		<input type="text" value="" placeholder="Title" name="title" tabindex="1" />
		<textarea placeholder="Description" name="description" tabindex="5" rows="10"></textarea>
		<input type="text" value="" placeholder="category" name="category" tabindex="1" />
					
		<input type="text" value="" placeholder="FromDate" name="fromdate" tabindex="3" />
		<input type="text" value="" placeholder="ToDate" name="todate" tabindex="2" />		
		<input type="text" value="" placeholder="Required Funds" name="requiredfunds" tabindex="2" />		
		
		<input type="text" value="" placeholder="Phone number" name="phno" tabindex="3" />
		<input type="text" value="" placeholder="EmailId" name="emailid" tabindex="2" />					
		
		<h1>Funding Option 1</h1>
		<input type="text" value="" placeholder="Fund" name="fund1" tabindex="3" />
		<input type="text" value="" placeholder="Reward1" name="reward11" tabindex="2" />		
		<input type="text" value="" placeholder="Reward2" name="reward12" tabindex="2" />		

		<h1>Funding Option 2</h1>
		<input type="text" value="" placeholder="Fund" name="fund2" tabindex="3" />
		<input type="text" value="" placeholder="Reward1" name="reward21" tabindex="2" />		
		<input type="text" value="" placeholder="Reward2" name="reward22" tabindex="2" />		

		<h1>Funding Option 3</h1>
		<input type="text" value="" placeholder="Fund" name="fund3" tabindex="3" />
		<input type="text" value="" placeholder="Reward1" name="reward31" tabindex="2" />		
		<input type="text" value="" placeholder="Reward2" name="reward32" tabindex="2" />		

		<h1>Funding Option 4</h1>
		<input type="text" value="" placeholder="Fund" name="fund4" tabindex="3" />
		<input type="text" value="" placeholder="Reward1" name="reward41" tabindex="2" />		
		<input type="text" value="" placeholder="Reward2" name="reward42" tabindex="2" />	

		<h1>Funding Account Details</h1>
		<input type="text" value="" placeholder="Account Number" name="accnumber" tabindex="3" />
		<input type="text" value="" placeholder="Account Holder name" name="accname" tabindex="2" />		
		<input type="text" value="" placeholder="IFSC Code" name="ifsccode" tabindex="2" />			
		
		<input type="submit" value="SUMBIT" tabindex="6" /></form>
</div>		
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
  <p>Thanks for visiting Crowd Funding</p>
</div>

</body>
</html>
