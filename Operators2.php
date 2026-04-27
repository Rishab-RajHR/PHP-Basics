<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operator (Comparison Operator)</title>
</head>
<body>
   <?php 
      $x = 5;
      $y = "5";

      if($x == $y) // Checks the value not data type
      {
          echo "THESE TWO VAR ARE EQUAL";
      }
      else
      {
         echo "THESE VARS NOT EQUAL";
      }



      $a = 5;
      $b = "5";

      if($a === $b) // Checks the value and data type
      {
          echo "THESE TWO VAR ARE EQUAL";
      }
      else
      {
         echo "THESE VARS NOT EQUAL";
      }



      $a = 5;
      $b = "hello";

      $c = "Hello";

      if($b === $c) // Checks the value and data type
      {
          echo "THESE TWO VAR ARE EQUAL";
      }
      else
      {
         echo "THESE VARS NOT EQUAL";
      }
   ?>
  
</body>
</html>