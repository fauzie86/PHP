<?php

echo "<h1>This is our first day of php</h1>";

//   variables
// variables are containers for storing the data or information
// Rules to write down the variables in php

/*
  always start with $ sign
  1.Cannot start with number
  2.Must start with a letter or an underscore character
  3.Can only contain alphanumeric characters and underscores
*/

// $name = "sam";

// echo $name;

// echo "<br>";

// $a = 999999;
// echo $a;

// echo "<br>";

// $student = "our students are very intelligent";
// echo "today we are learning php and our $student";

$name = "john";
$age = 25;
$height = 6;
$students = true;

// display information using variables

echo "<h1> user information    </h1>";
echo "<h3>Name: $name </h3>";
echo "<h3>Age: $age </h3>";
echo "<h3>Height: $height </h3>";

if ($students){
    echo "Status: student";
}else{
    echo "Status: Not a student";
}



?>
