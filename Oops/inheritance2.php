<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance in PHP</title>
</head>
<body>
<?php
   
class Car
{
     private $speed=80;

     function changegear()
     {
         echo "gear fun";
     }
}
class SportsCar  extends Car
{
     private $speed=120,$style="Stylish";
}

$sp1 = new SportsCar();

$sp1->changegear();
?>
</body>
</html>