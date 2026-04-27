<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Each Loop</title>
</head>
<body>
  <?php
      /*
         Syntax for foreach loop

         foreach(nameofarray as $a)
         {
            statements
         }
      */

        $arex = array("num1"=>1,"num2"=>2,3,4,5);

        foreach($arex as $key=>$v)
        {
            echo $key." => ".$v."<br>";
        }
  ?>
  
</body>
</html>