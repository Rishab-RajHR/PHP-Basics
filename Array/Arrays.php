<!DOCTYPE html>
<html lang="en">
<head>

  <title>Arrays in PHP</title>
</head>
<body>
  <!-- In PHP we have only dynamic Array [$variablename = array()]
     // In c/c++
      int rollno[10]

      rollno[0]=01;
      rollno[1]="csetuts"
  -->
  <?php
    
      // $arex = array();

      // $arex[10] = 2;
      // $arex['abc'] = "Alex" ;

      // echo $arex[10]."<br/>";
      // echo $arex['abc'];


      // For writing like key=>value
      $aret = array(10=>2,"abc"=>"Alex");

      echo $aret[10]."<br/>";
      echo $aret['abc'];
  ?>
  
</body>
</html>