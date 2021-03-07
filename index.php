<?php 
session_start();
  
 echo "<h2>Congratulation!" . " " . $_SESSION['Username'] . "you have logged  in</h2>";
  
?>

<a href="logout.php">Logout</a>