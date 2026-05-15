<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Access Modifier in PHP</title>
</head>
<body>
<?php
  class Food
  {
       public $Fname;

       function showData()
       {
           echo "Item is :".$this->Fname."<br>";       
       }
  }
  $f1 = new Food();
  $f1->Fname="Pizza";
  $f1->showData();
?>
</body>
</html>