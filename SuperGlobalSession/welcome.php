<h1 align="center">
  <?php
    session_start();
    if(isset($_SESSION["Uname"]))
    echo "Welcome ".$_SESSION["Uname"];
    else
      echo "You are not Login";
?>
</h1>
<h2>

  <a href="logout.php" style="float:right;">logout</a>
</h2>