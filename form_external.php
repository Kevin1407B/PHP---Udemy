<?php

if( isset($_POST["submit"]) ) {
  $names = ["Kevin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom"];
  $minLength = 5; 
  $maxLength = 10;

  $username = $_POST["username"];
  $password = $_POST["password"];
  
  
  if( strlen($username) < $minLength ) {
    echo "<h4 class='alert'>Username has to be longer than 5 characters.</h4>";
  }
  if( strlen($username) > $maxLength ) {
    echo "<h4 class='alert'>Username cannot be longer than 10 characters.</h4>";
  }
  if( !in_array($username, $names) ) {
    echo "<h4 class='alert'>Sorry, you are not allowed to login</h4>";
  } else {
    echo "<h4 class='welcome'>Welcome " . $username . "</h4>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <style>
      .alert,
      .welcome {
        font-family: sans-serif;
        font-weight: bold;
        color: red;
        background-color: pink;
        border: 1px solid red;
        width: max-content;
        padding: 0.25rem;
      }
      .welcome {
        color: green;
        background-color: lightseagreen;
        border-color: green;
      }
    </style>
  </head>
  <body>
  
    <form action="forms.php" method="post">
      <input type="text" name="username" placeholder="Enter Username">
      <br>
      <input type="password" name="password" placeholder="Enter Password">
      <br>
      <br>
      <input type="submit" name="submit">
    </form>

  </body>
</html>