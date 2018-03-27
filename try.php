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

<select name="id">
<?php 
$sql = mysqli_query($conn, "SELECT Facility_id from Facilities");
while ($row = $sql->fetch_assoc()){
echo "<option value=\"id\">" . $row['Facility_id'] . "</option>";
</select>
?>

</body>
</html> 


