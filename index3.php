<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index3.php" method="post"> 
    <input type="radio" name="creditcard" value="visa">
    visa<br>
    <input type="radio" name="creditcard" value="MasterCard">
    MasterCard<br>
    <input type="radio" name="creditcard" value="American Express">
    American Express<br>
    <input type="submit" name="confirm" value="confirm">   
  </form>
</body>
</html>
<?php
if(isset($_POST["confirm"])){
  if (isset($_POST["creditcard"])) {
    $creditcard=$_POST["creditcard"];
  }
  switch ($creditcard) {
    case "visa":
      echo "you selected visa";
      break;
    case "MasterCard":
      echo "you selected MasterCard";
      break;
    case "American Express":
      echo "you selected American Express";
      break;
    default:
      echo "please select";
  }
}
?>