<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index4.php" method="post"> 
    <input type="checkbox" name="pizza" value="pizza">
    pizza<br>
    <input type="checkbox" name="hamburger" value="hamburger">
    hamburger<br>
    <input type="checkbox" name="hotdog" value="hotdog">
    hotdog<br>
    <input type="checkbox" name="taco" value="taco">
    taco<br>
    <input type="submit" name="submit" >   
  </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
  if (isset($_POST["pizza"])) {
    echo "you like pizza <br>";
  }
  if (isset($_POST["hamburger"])) {
    echo "you like hamburger <br>";
  }
  if (isset($_POST["hotdog"])) {
    echo "you like hotdog <br>";
  }
  if (isset($_POST["taco"])) {
    echo "you like taco <br>";
  }
  if (empty($_POST["pizza"])) {
    echo "you dont like pizza <br>";
  }
  if (empty($_POST["hamburger"])) {
    echo "you dont like hamburger <br>";
  }
  if (empty($_POST["hotdog"])) {
    echo "you dont like hotdog <br>";
  }
  if (empty($_POST["taco"])) {
    echo "you dont like taco <br>";
  }
}
?>