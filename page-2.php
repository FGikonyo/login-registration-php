<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("location: login.php");
}
?>

<html>
 
<body>
     <style>
body {
  background-image: url('10.jpg');
}
</style>  

    <div style="text-align:right">
        <a href="logout.php">Logout</a>
    </div>
    Thanks for login  enjoy  
    <br>

    <a href="page-1.php"> ClickMe</a>

</body>

</html>



