<?php
   session_start();
   
    if(isset($_POST['Login']) && isset($_POST['Password'])){
        $Username = $_SESSION['Username'];
        $Password = $_SESSION['Password'];
        if($_POST['Username'] === $Username && $_POST['Password'] === $Password){
            $_SESSION['Username']= $_POST['Username'];
            $_SESSION['Password']= $_POST['Password'];
            header ('location: index.php');
        }
        else
        {
            echo "<script>alert('Invalid Username or Password');</script>";
        }
    }
 
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <!---- REGISTRATION GOES HERE---->
<form action="" method="post">
<h1>Account Log In</h1>
<hr>
<table height = "150px" width = "350px">
    <tr><td><input type="text"  required placeholder = "Username" name="Username"> </td></tr>
    <tr><td><input type="text"  required placeholder = "Password" name="Password" ></td></tr>
    <tr><td><button name="Login" value="Login">Login</button></td></tr>
</table>
</form>
    </center>
</body>
</html>
