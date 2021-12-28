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