<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constructor in PHP</title>
</head>
<body>
<?php
   
class Example{

   private $name;
    
   public function __construct($value)
   {
       $this->name=$value;
   }

   public function ShowVal()
   {
      echo $this->name;
   }
  
}
$obj = new Example("Tovino");
$obj->ShowVal();


?>
</body>
</html>