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

  $sanitized_a = filter_var($b, FILTER_SANITIZE_EMAIL);

  echo $sanitized_a;

  ?>
</body>
</html>