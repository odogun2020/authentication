<?php
session_start();
if(isset($_POST['register'])){ 
    $_SESSION['Username'] = $_POST['$First_Name'];
    $_SESSION['Last_Name'] = $_POST['$Last_Name'];
    $_SESSION['Email'] = $_POST['Email'];
    $_SESSION['Username']= $_POST['Username'];
    $_SESSION['Password']= $_POST['Password'];
    echo "<script>alert('Register successfully');</script>";
    
    header("location: login.php");

} 
else{
    echo "<script>alert('Invalid input check fields');</script>";
 }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <center>
    <!---- REGISTRATION GOES HERE---->
    <form action="register.php" method="post">
    <h1>Account Registration Here</h1>
    <hr>
    <table height = "200px" width = "350px">
        <tr><td><input type="text"  required placeholder = "First Name" name="First_Name"/></td></tr>
        <tr><td><input type="text" required  placeholder = "Last Name" name="Last_Name"/></td></tr>
        <tr><td><input type="text"  required placeholder = "E-Mail" name="Email"/></td></tr>
        <tr><td><input type="text"  required placeholder = "Username" name="Username"/></td></tr>
        <tr><td><input type="text"  required placeholder = "Password" name="Password"/></td></tr>
        <tr><td colspan="2"><button name="register">Create Account<a href="login.php"></button>  |  Alread Have Account <a href="login.php">Sign In</td></tr>
    </table>
    </form>
    </center>
</body>
</html>