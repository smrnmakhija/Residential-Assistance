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

<html>
<body>

<?php
 
$message= $_POST["Message"]; 
$id= $_POST["Facility_identifier"];

echo "Thank you. Will look into it as soon as possible";
$sql="Insert into Complaint(Facility_id, Msg) values('".$_REQUEST["Facility_identifier"]."','".$_REQUEST["Message"]."')";
$conn->query($sql);
$sql = "UPDATE Facilities SET Priority=Priority+1 where Facility_id='{$id}'";
$conn->query($sql);
?>

</body>
</html> 
