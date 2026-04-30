<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies in PHP</title>
</head>
<body>
<?php
$value = "AlexZen";
$exp = time() + 86400;
setcookie("name",$value,$exp);

echo $_COOKIE['name'];
?>
</body>
</html>