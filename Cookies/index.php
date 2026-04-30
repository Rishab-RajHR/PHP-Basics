<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies in PHP</title>
</head>
<body>
<?php

$value = "AlexZen from Kerala"; // For modifying the cookie we call the cookie
$exp = time() + 86400;
setcookie("name",$value,$exp);

echo $_COOKIE['name'];

// For deleting the cookie

$unsetcookie = time() - 86400;

// setcookie("name","",$unsetcookie);

?>
</body>
</html>