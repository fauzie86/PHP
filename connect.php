<?php

// echo "welcome to the database part";

/*
  ways to connect to a mysql Database.
  1. MySQLI extension (procedural(function) , object oriented(classes & objects))
  2. PDO => PHP data object
*/

// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection

$conn = mysqli_connect($servername, $username, $password);

// die if connection was not successfull

if (!$conn){

    die("sorry we failed to connect ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}


?>
