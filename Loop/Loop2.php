<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loop basics</title>
</head>
<body>
<?php
   
      $arex = array(111,12,23,54,5,11,7,8,89,0);

      $i=0;

      while($i>10)
      {
           echo $arex[$i]." , ";

           $i++;
      }
      echo "Loop not executed";
?>
</body>
</html>