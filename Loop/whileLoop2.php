<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Loop</title>
</head>
<body>
  <?php
    $arex = array(1,2,3,4,5,6,7,8,9,0);

    $i = 0;

    while($i < 10)
    {
        echo $arex[$i]." ,";
        $i++;
    }
?>
</body>
</html>