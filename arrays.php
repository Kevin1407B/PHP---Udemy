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

  // oude syntax
  $numberList = array();
  // nieuwe syntax
  $numberList = [267, 8765, 345, "5345", 345, "<h1>Hello</h1>"];

  echo $numberList[5];
  // print_r($numberList);
  // echo $numberList[0];

  ?>

  </body>
</html>