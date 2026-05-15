<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Access Modifier in PHP</title>
</head>
<body>

<?php
class Food
{
    protected $Fname;

    public function getName($name)
    {
        $this->Fname = $name;
    }

    public function showData()
    {
        echo "Item is : " . $this->Fname . "<br>";
    }
}

class JunkFood extends Food
{
    function passvalue()
    {
        $this->Fname="New Junk Food";
    }
}
$jf = new JunkFood();
$jf->passValue();
$jf->showData();

?>

</body>
</html>