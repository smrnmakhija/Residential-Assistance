<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$dbname = "Apartment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
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
  <h1 class ="jumboton-text">Home</h1>
  </div>
</div>
<body>
<style>
.jumbotron{
	height:auto;
	border-radius:5px;

}
</style>


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
                <li><a href="complaint.php">Complaint desk</a></li>
                <li><a href="login.php">Admin</a></li>
                <li><a href="reser.php">Facility Reservation</a></li>
            </ul>
        </div>
    </div>
</nav>
<ul>

<div class="container">
<html>
    <head>
        <title>PHP MySQL Stored Procedure Demo 1</title>
        <link rel="stylesheet" href="css/table.css" type="text/css" />
    </head>
    <body>
        <?php
        require_once 'dbconfig.php';
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            // execute the stored procedure
            $sql = "SELECT Facility_id, Name from Facilities";
            // call the stored procedure
            $q = $pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
        ?>
        <table class='table'>
            <tr>
                <th>Facility_id</th>
                <th>Facility</th>
            </tr>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo $r['Facility_id'] ?></td>
                    <td><?php echo ' ' . $r['Name'] ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>

