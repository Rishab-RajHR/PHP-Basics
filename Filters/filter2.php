<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filters in PHP</title>
</head>
<body>
  <?php
   $a = 'joe@example.org';
   $b = 'bogus - at - example dot org';


   $sanitized_a = filter_var($a, FILTER_SANITIZE_EMAIL);
   if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
      echo "This ($a) sanitized email address is considered valid.\n<br>";
   }

   $sanitized_b = filter_var($b, FILTER_SANITIZE_EMAIL);
   if (filter_var($sanitized_b, FILTER_VALIDATE_EMAIL)) {
      echo "This  sanitized email address is considered valid.<br>\n";
   } else {
      echo "This ($b) sanitized email address is considered invalid.\n";
   }



  ?>
</body>
</html>