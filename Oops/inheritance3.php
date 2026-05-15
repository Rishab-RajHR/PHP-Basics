<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance in PHP</title>
</head>
<body>
<?php
   
class Fan{
    function changespeed()
    {
        echo "Fan Class";
    }
}
class TableFan extends Fan
{
    
}
class PedestalFan extends Fan
{
     
}

$tf = new TableFan();
$tf->changespeed();
?>
</body>
</html>