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
  <h1>WEB_APP</h1>
  <p>CAPTION</p> 
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
        <li style="color:white" ><a href="#">Live Projects</a></li>
        <li><a href="#">Done Projects</a></li>
		<li class="active"><a href="http://localhost/myproject/MyProject.php">My Projects</a></li>
		<li><a href="#">Recommendatios</a></li>
      </ul>
      <hr class="hidden-sm hidden-md hidden-lg">
	  <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
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
	    <li><a href="http://localhost/myproject/MyProject.php">LiveProject</a></li>
        <li><a href="#" onclick="doneproject()">DoneProjects</a></li>
		<li><a href="#">CreateProjects</a></li>
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

$user=1;
$mysqli = new mysqli("localhost", "root","","myproject");

$userquery = $mysqli->query("SELECT projectId FROM userslist Where userId=1");

if($userquery==false)
{
	echo "error occured";
}
else
{
	    //$row = mysqli_fetch_row($userquery);
		$projectid=$_POST['name'];
		$projectquery = $mysqli->query("SELECT * FROM projectslist Where projectId= $projectid");
		$row1= mysqli_fetch_row($projectquery);
		
		//splitting the contact details
		$contactinfo=explode(",",$row1[3]);
		$name=$contactinfo[0];
		$emailid=$contactinfo[1];
		$contact=$name.$emailid;

		//splitting funding details
		$fundingdetails=explode(",",$row1[5]);
		$accnumber=$fundingdetails[0];
		$accname=$fundingdetails[1];
		$acccode=$fundingdetails[2];
		$funding=$accnumber.$accname.$acccode;
		
		$statusquery = $mysqli->query("SELECT * FROM statusreport Where projectId= $projectid");
		$row2= mysqli_fetch_row($statusquery);
		
		//splitting the stage 1
		$stage1=explode(",",$row2[1]);
		$stage1from=$stage1[0];
		$stage1to=$stage1[1];
		$stage1cost=$stage1[2];
		$stage11=$stage1from.$stage1to.$stage1cost;
		
		//splitting the stage 2
		$stage2=explode(",",$row2[2]);
		$stage2from=$stage2[0];
		$stage2to=$stage2[1];
		$stage2cost=$stage2[2];
        $stage22=$stage2from.$stage2to.$stage2cost;
		
		//splitting the stage 3
		$stage3=explode(",",$row2[3]);
		$stage3from=$stage3[0];
		$stage3to=$stage3[1];
		$stage3cost=$stage3[2];
		$stage33=$stage3from.$stage3to.$stage3cost;
		
		//splitting the stage 4
		$stage4=explode(",",$row2[4]);
		$stage4from=$stage4[0];
		$stage4to=$stage4[1];
		$stage4cost=$stage4[2];		
		$stage44=$stage4from.$stage4to.$stage4cost;
		
				echo 	'<form action="EditPageSuccess.php" method="POST">
	<table style="width:80%">
	<tr>
		<th><h4>Title       :</h4></th>
		<td>
		<input type="text" name="title" value="'.$row1[1].'" cols="10" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
	    </td>
    </tr>
	<hr>
	<tr>
		<th><h4>Description:</h4></th>
		<td>
		<br>
		<input type="text" name="description" value="'.$row1[2].'" cols="50" rows="10" style="border-top:3px double #1FA1E3;">
			</input>
	    </td>
    </tr>
	<tr>
		<th><h4>Images:</h4></th>
		<td>
		
			<button>UPLOAD</button>
	    </td>
    </tr>	
		<tr>
		<th><h4>ContactInfo:</h4></th>
		<td>
		<br>
			<table style="100%">
				<tr>
					<th><h5>Name:</h5></th>
					<td>
						<input type="text" name="name" value="'.$name.'" cols="10" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>
				</tr>
				<tr>
					<th><h5>EmailID:</h5></th>
					<td>
						<input type="text" name="emailid" value="'.$emailid.'"cols="10" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>
				</tr>				
			</table>
	    </td>
    </tr>	
			
		<tr>
		<th><h4>StatusReport:</h4></th>
		<td>
		<br>
			<table style="100%">
				<tr>
					<th><h6> </h6></th>
					<th><h5>FROM</h5></th>
					<th><h5>TO</h5></th>
					<th><h5>COST</h5></th>
				</tr>
				<tr>
					<th><h5>stage1:</h5></th>
					<td>
						<input type="text" name="stage1from" value="'.$stage1from.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>
					<td>
						<input type="text" name="stage1to" value="'.$stage1to.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
					<td>
						<input type="text" name="stage1cost" value="'.$stage1cost.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
				</tr>	
				<tr>
					<th><h5>stage2:</h5></th>
					<td>
						<input type="text" name="stage2from" value="'.$stage2from.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>
					<td>
						<input type="text" name="stage2to" value="'.$stage2to.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
					<td>
						<input type="text" name="stage2cost" value="'.$stage2cost.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
				</tr>
				<tr>
					<th><h5>stage3:</h5></th>
					<td>
						<input type="text" name="stage3from"  value="'.$stage3from.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>
					<td>
						<input type="text" name="stage3to"  value="'.$stage3to.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
					<td>
						<input type="text" name="stage3cost"  value="'.$stage3cost.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
				</tr>	
				<tr>
					<th><h5>stage4:</h5></th>
					<td>
						<input type="text" name="stage4from"  value="'.$stage4from.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>
					<td>
						<input type="text" name="stage4to" value="'.$stage4to.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
					<td>
						<input type="text" name="stage4cost" value="'.$stage4cost.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
				</tr>									
			</table>
	    </td>
    </tr>
		<tr>
		<th><h4>FundingDetails:</h4></th>
		<td>
		<br>
			<table style="100%">
				<tr>
					<th><h5>AccountNumber:</h5></th>
					<td>
						<input type="text" name="accnumber" value="'.$accnumber.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
				</tr>
				<tr>
					<th><h5>AccountHolderName:</h5></th>
					<td>
						<input type="text" name="accname" value="'.$accname.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
				</tr>
				<tr>
					<th><h5>IFSC-Code:</h5></th>
					<td>
						<input type="text" name="acccode" value="'.$acccode.'" cols="5" rows="2" style="border-top:3px double #1FA1E3;">
						</input>
					</td>					
				</tr>								
			</table>
	    </td>
    </tr>	
    </table>
	<input type="text" style="display:none" name="projectid" value="'.$projectid.'"><br>
	<input type="submit" />
	</form>';
	$mysqli->close();
}
?>		
		
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

</body>
</html>


