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
  background-image: url('101.jpg');
}
</style>  
    
    <div style="text-align:right">
        <a href="logout.php">Logout</a>
    </div>

   Welcome to Margaret home page  for login users.
    <br>
    <a href="page-2.php">ClickMe</a>

</body>

</html>


