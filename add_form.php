<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Residential Assistance</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
</head>

<body>
	
<!-- This is my code lol -->
<div class="jumbotron bg-image">
  <div class="container">
  <h1 class ="jumboton-text">Adminstrator</h1>
  </div>
</div>


<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="100" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Residential Assistance</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav navbar-right">
                <!--<li class="active"><a href="https://www.tutorialrepublic.com" target="_blank">Home</a></li>-->
                <li><a href="notice.php">Notice Board</a></li>
                <li><a href="complaint.php">Complaint Desk</a></li>
                <li><a href="login.php">Admin</a></li>
                <li><a href="reser.php">Facility Reservation</a></li>
            </ul>
        </div>
    </div>
</nav>

 <form action="admin.php">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Facility_id" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Description" name="psw" required>

    <button type="submit" id="submit">Submit</button>
  </div>
  </div>
</form>