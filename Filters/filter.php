<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filters in PHP</title>
</head>
<body>
  <?php
    $email_a = 'alex12@gmail.com';
    $email_b = 'alex12@gmailcom';

    if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
        echo "This ($email_a) email address is considered valid.<br>";
    }
    else {
       echo "This ($email_a) email address is not considered valid.<br>";
    }
    if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
        echo "This ($email_b) email address is considered valid.<br>";
    }
      else {
       echo "This ($email_b) email address is not considered valid.<br>";
    }
  ?>
</body>
</html>