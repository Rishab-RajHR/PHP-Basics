<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Super Global Arrays</title>
</head>
<body>
  <h1>
  <?php
  
    echo "HTTP_HOST = ".$_SERVER['HTTP_HOST']."<br>";
    echo "HTTP_USER_AGENT = ".$_SERVER['HTTP_USER_AGENT']."<br>";
    echo "REMOTE_ADDR = ".$_SERVER['REMOTE_ADDR']."<br>";
    echo "SERVER_PORT = ".$_SERVER['SERVER_PORT']."<br>";
    echo "PHP_SELF = ".$_SERVER['PHP_SELF']."<br>";

    function showbrowser()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }
  ?>
<h2> You are using <?php echo showbrowser(); ?></h2>
  </h1>
</body>
</html>