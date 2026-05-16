<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function overloading</title>
</head>
<body>

<?php 

// We can't do function overloading in PHP

class Additionclass
{
 
  function Add($num1,$num2)
  {
     echo ($num1+$num2);
  }
  // function Add($num1,$num2,$num3)
  // {
  //     echo ($num1+$num2+$num3);
  // }
 }  
$obj = new Additionclass();
$obj->Add(5,6);
?>
  
</body>
</html>