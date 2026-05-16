<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function overriding</title>
</head>
<body>

<?php 

class Car
{
    public function StartCar()
    {
        echo "The Car is Started.";
    }
}

class SportsCar extends Car
{
    public function StartCar()
    {
         echo "The SportsCar Started with self start";
    }
}

$SpCar = new SportsCar();
$SpCar->StartCar();
?>
  
</body>
</html>