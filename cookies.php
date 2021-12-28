<?php

$name = "someName";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7);
// time() = seconds times minutes times hours times days
// expires in a week in example

setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <?php

    if( isset($_COOKIE["someName"]) ) {
      $someOne = $_COOKIE["someName"];
      echo $someOne;
    } else {
      $someOne = "";
    }

    ?>
  </body>
</html>