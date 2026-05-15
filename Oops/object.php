<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Object in PHP</title>
</head>
<body>

<?php
    class Student {
        
        private $name,$address,$contactno;

        function getdata($sname,$sadd,$scon)
        {
             $this->name = $sname;
             $this->address = $sadd;
             $this->contactno = $scon;
        }
        function showdata()
        {
            echo "Name : ".$this->name;
        }
    }

    $purvik = new Student();
    $ramesh = new Student();

    $purvik->getData("Alex","Tanjavur","9857897667");
    $purvik->showdata();
?>
</body>
</html>