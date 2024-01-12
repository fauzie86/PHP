<?php

// echo "welcome to the database part";

// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sam2";

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

// $sql = "CREATE DATABASE sam4";
// $result = mysqli_query($conn,$sql);

// check database is create or not


// create a table in the db

$sql = "CREATE TABLE `sam2`.`trip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn,$sql);

if($result){
    echo "the table was created successfully";
}else{
    echo "the db was not created successfully because of this error -----> " .mysqli_error($conn);
}



?>
