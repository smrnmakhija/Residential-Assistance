<?php
 
   if(isset($_REQUEST['submit'])){
 if(empty($_REQUEST['uname']) || empty($_REQUEST['psw'])){
 $error = "Username or Password is Invalid";
 }
}
$username=$_REQUEST['uname'];
$password=$_REQUEST['psw'];

  $conn= mysqli_connect('localhost','root','root123');
  if($conn == false)
{
   die(mysqli_connect_error());
}
$db= mysqli_select_db($conn,'Apartment');

$result = mysqli_query($conn,"SELECT * FROM Admin WHERE Admin_id='$username' AND Password ='$password'") or die("Failed to query database ".mysql_error());
   
$row = mysqli_num_rows($result);

   if($row==1) 
   {
      
    header("Location:admin.php");
   }

   else {
    echo "Failed to login!!!";
   }
?>
