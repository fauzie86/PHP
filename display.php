<?php

// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sam2";

// create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

// die if connection was not successfull

if (!$conn){

    die("sorry we failed to connect ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
};

echo "<br>";

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn,$sql);

// find the number of records
$num = mysqli_num_rows($result);
echo $num;

// display the rows returned by sql query
echo "<br>";
if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
   
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);

//         echo $row['sno']. ".Hello " . $row['name']. " welcome to " . $row['dest'];
// echo "<br>";
    }

}
?>
