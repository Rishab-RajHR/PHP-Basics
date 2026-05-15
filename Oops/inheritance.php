<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance in PHP</title>
</head>
<body>
<?php
   
class Parents
{
     private $data1;

     function parentsfun()
     {
         echo "I am the function of Parent Class <br>";
     }
}
class Child  extends Parents
{
      function childfun()
      {
           echo "I am the function of Child Class <br>";
      }
}

$child1 = new Child();

$child1->childfun();

?>
</body>
</html>