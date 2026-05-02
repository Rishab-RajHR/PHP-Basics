<?php

  $name =  $_POST['name'];
  $email =  $_POST['email'];

  $con = mysqli_connect('localhost','root','','insertdb');

   $query = "INSERT INTO `userdata`( `Name`, `Email`) VALUES ('$name','$email')";

   $run = mysqli_query($con,$query);

   if($run == TRUE)
       echo "Data Inserted Successfully <a href='index.php'>Click here to insert more.</a>";
   else 
      echo "Error !";
?>