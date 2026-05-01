<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database Connection in MySQL</title>
</head>
<body>
  <?php
  
    $con = mysqli_connect('localhost','root','','exmaple');
    if($con)
    {
         echo "Connection Established Successfully";
    }
    else
    {
       echo "Error ! can't Connect with Database";
    }
  ?>
  
</body>
</html>