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
         constr("Tovino", "Pandian");
         echo "<br>";
         constr("They are from Kerala","Kasargod");
    ?>

  
</body>
</html>