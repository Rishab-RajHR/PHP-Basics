<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions in PHP</title>
</head>
<body>

    <?php
    
     function add($num1, $num2)
     {
         return ($num1+$num2);
     
     }
          $ans = add(2,3);

          // echo "Answer is ".add(2,4);
          echo "Answer is ".$ans;
  

    ?>

  
</body>
</html>