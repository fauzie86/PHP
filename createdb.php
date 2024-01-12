<?php

// echo "welcome to the database part";

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
};
echo "<br>";
// create a database

$sql = "CREATE DATABASE sam4";
$result = mysqli_query($conn,$sql);

// check database is create or not

if($result){
    echo "The db was created successfully";
}else{
    echo "the db was not created successfully because of this error -----> " .mysqli_error($conn);
}



?>
