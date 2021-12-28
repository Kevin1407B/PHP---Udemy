<?php include "db.php"; ?>

<?php

/*
 *  ------------------------------------
 *  CRUD - CREATE
 */ 

function createRows() {

  if( isset($_POST["submit"]) ) {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);
    if( !$result ) {
      die("Query FAILED");
    } else {
      echo "Record Created";
    }

  }
}

/*
 *  ------------------------------------
 *  CRUD - READ
 */ 

function readRows() {
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);

  if( !$result ) {
    die("Query FAILED" . mysqli_error($connection));
  }

  while( $row = mysqli_fetch_assoc($result) ) {
    print_r($row);
  }
}

function showAllData() {
  global $connection;
  
  $query = "SELECT * FROM users";
  
  $result = mysqli_query($connection, $query);
  if( !$result ) {
    die("Query FAILED" . mysqli_error($connection));
  }

  while( $row = mysqli_fetch_assoc($result) ) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

/*
 *  ------------------------------------
 *  CRUD - UPDATE
 */

function updateTable() {
  
  if( isset($_POST["submit"]) ) {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if( !$result ) {
      die("Query FAILED" . mysqli_error($connection));
    } else {
      echo "Record Updated";
    }
  }
}

/*
 *  ------------------------------------
 *  CRUD - DELETE
 */

function deleteRows() {

  if( isset($_POST["submit"]) ) {
    global $connection;
    $id = $_POST["id"];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if( !$result ) {
      die("Query FAILED" . mysqli_error($connection));
    } else {
      echo "Record Deleted";
    }
  }
}