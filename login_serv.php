<?php
 
   if(isset($_POST['submit'])){
 if(empty($_POST['uname']) || empty($_POST['psw'])){
 $error = "Username or Password is Invalid";
 }
}
$username=$_REQUEST['uname'];
$password=$_REQUEST['psw'];


if($username=='B21' and $password=='qeew343') 
   {
      
    header("Location:admin.php");
   }

   else {
    echo "Failed to login!!!";
   }
?>
