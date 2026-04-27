<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions in PHP</title>
</head>
<body>
    <?php
        function sayhello($user)
        {
            echo "Hello ". $user ;
        }
    ?>

    <?php   
    
    $username = "AlexZen"; ?>
    <h1><?php sayhello($username);  
    ?></h1>
  
</body>
</html>