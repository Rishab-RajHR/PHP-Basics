<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class in PHP</title>
</head>
<body>
<?php 
 class Student{
     
     private $name,$rollno;

     function getData($name,$rollno)
     {
        $this->name=$name;
        $this->rollno=$rollno;
     }
     function showData()
     {
        echo "Name : ".$this->name." Rollno :- ".$this->rollno;
     }
 }
 $student1 =  new Student();
 $student1->getData("Alex",1);
 $student1->showData();
 
 $student2 =  new Student();
 $student2->getData("Tovino",2);
 $student2->showData();

?>
</body>
</html>