<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>This Keyword</title>
</head>
<body>
<?php

class Student
{
     private $stu_name;

     function getData($sname)
     {
         $this->stu_name=$sname;
     }
     function showData()
     {
        echo $this->stu_name;
     }
}

$purvik = new Student();
$purvik->getData("Purvik");
$purvik->showData();

$ramesh = new Student();
$ramesh->getData("Ramesh");
$ramesh->showData();

?>

</body>
</html>