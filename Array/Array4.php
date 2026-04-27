<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Inside array</title>
</head>
<body>
  <?php
   
    $arex = array();

    $arex[0] = array(12, 13, 14, 15);
    $arex[1] = array(15, 16);


    // Similar to upper part
    // $arex[0][0] = 12;
    // $arex[0][1] = 13;
    // $arex[0][2] = 14;


    // Similar to upper second part
    // $arex[1][] = 15;
    // $arex[1][] = 16;


    echo"<pre>";
    print_r($arex);
    echo"</pre>";
   
  ?>
  
</body>
</html>