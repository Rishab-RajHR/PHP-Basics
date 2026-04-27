<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions in PHP</title>
</head>
<body>
   <!-- Functions with multiple Parameters -->
    <?php
         function constr($str1, $str2)
         {
             echo $str1." ".$str2;
         }

        constr("Alex", "Pandian");

        echo "<br>";

        $fname = "Ram";
        $lname = "Singh";
        $num = 12;

        constr($fname, $num);
        // constr($fname, $lname ,$num); => It will ignore the last one
    ?>

  
</body>
</html>