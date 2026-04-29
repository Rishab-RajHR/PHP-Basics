<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do While Loop</title>
</head>
<body>
<?php
    $arex = array(1,12,23,54,5,11,7,8,89,0);

    $i=0;
  
    do{
       echo $arex[$i]," , ";

       $i++;
    } while($i<10);
?>
</body>
</html>