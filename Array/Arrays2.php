<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arrays in PHP2</title>
</head>
<body>
<?php
    $arex = array();

    $arex[0] = 1;
    $arex[] = "ABCX";  // We cannot keep array empty
    $arex[] = 2;
    $arex[5] = 3;
    $arex[] = 6;

    // echo $arex[0]."<br />";
    // echo $arex[1]."<br />";
    // echo $arex[2];

    echo"<pre>";
    print_r($arex);
    echo"</pre>";

?>
</body>
</html>