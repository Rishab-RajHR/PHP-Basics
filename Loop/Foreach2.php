<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Each Loop</title>
</head>
<body>
  <?php
  
       $week = array("SUN","MON","TUE","WED","THU","FRI","SAT");

       foreach($week as $v)
      {
         echo $v."<br>";
      }
  ?>
  
</body>
</html>