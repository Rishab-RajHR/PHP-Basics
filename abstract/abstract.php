<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abstract Method</title>
</head>
<body>
<?php 
  
abstract class  speak
{
       abstract public function sayHello();

     public function hello2()
     {
         echo "hello2 function <br>";
     }
}
class childone extends speak
{
     
     public function sayHello()
     {
         echo "Hello all <br>";
     }
}
$ch = new childone();
$ch->hello2();
$ch->sayHello();
?>
</body>
</html>