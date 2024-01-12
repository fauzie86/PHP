<?php

// echo "this is our data type";

/*
   Data types in php

   1. String
   2. Integar
   3. Float
   4. Boolean
   5. Object
   6. Array
   7. Null
 */

//  string - squence of characters

$name  = "students";
echo $name;

// integar - Non decimal number

$money = 455;
$debt = -655;
echo "<br>";
echo $money;
echo "<br>";

echo $debt;

// Float - decimal point number

$money = 455.8;
$debt = -655.9;
echo "<br>";
echo $money;
echo "<br>";

echo $debt;

// Boolean - Can be either true or false
echo "<br>";
$x = true;
$y = false;

echo var_dump($x);
echo "<br>";
echo var_dump($y);

// Object - instances of classess
echo "<br>";
$friend = array ("ariff" , "shashi" , "anudip" , "amir" , "sam");
echo var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[1];
echo "<br>";
echo $friend[2];
echo "<br>";
echo $friend[3];
echo "<br>";
echo $friend[4];

// null
echo "<br>";
$n = NULL;
echo var_dump($n);
?>
