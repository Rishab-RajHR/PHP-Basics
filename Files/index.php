<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store Images in The Database</title>
</head>
<body>
  
   <form method="post" action="index.php" enctype="multipart/form-data">
      <input type="file" name="img1" required="required"/>
      <input type="submit" name="submit" value="Upload"/>
   </form>

</body>
</html>
<?php

    if(isset($_POST['submit'])) {
        
        $imagename = $_FILES['img1']['name']; // storing file name

        $tempimgname = $_FILES['img1']['tmp_name']; // temp name store

        $conn = mysqli_connect('localhost','root','','storeimg') or die(mysqli_error());

        move_uploaded_file($tempimgname,"images/$imagename");

        $sql = "INSERT INTO `uploadimg`(`images`) VALUES ('$imagename')";
        $run = mysqli_query($conn,$sql);

        echo "Upload Success";
    }
?>