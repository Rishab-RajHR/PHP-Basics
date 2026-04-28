<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Variable in PHP</title>
</head>
<body>
<?php
$Firstname = "ALEXZEN";
$Lastname = "PHP MYSQL";

function example()
{
    global $Firstname;
    echo $Firstname;
}

function example2()
{
    echo $GLOBALS['Lastname'].$GLOBALS['Firstname'];
}
?>

<h1><?php example(); ?></h1>
<h1><?php example2(); ?></h1>
</body>
</html>