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
        echo "Car Started From Parent Class  <br>";
    }
    public function InvokeParentStart()
    {
        self::StartCar();
    }
}

class SportsCar extends Car
{
    public function StartCar()
    {
         echo "Car Started From Child Class <br>";
    }
    public function InvokeParent()
    {
        parent::InvokeParentStart();
    }

}

$SpCar = new SportsCar();
$SpCar->StartCar();
$SpCar->InvokeParent();
?>
  
</body>
</html>