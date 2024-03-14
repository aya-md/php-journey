<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">radius:</label>
    <input type="text" name="radius"><br>
    <input type="submit" value="calculate">
  </form><br>
</body>
</html>
<?php
$radius =$_POST["radius"];
$circumfrence = null;
$area = null;
$volume = null;

$circumfrence = 2 * pi() * $radius;
$circumfrence = round($circumfrence ,2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo"the circumfrence is {$circumfrence}cm<br>";
echo"the area is {$area}cm^2 <br>";
echo"the volume is in case it's a sphere {$volume} cm^3";
?>
