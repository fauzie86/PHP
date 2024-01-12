<?php
// echo "This is our string function file";

// string functions

$name = "our students are brilliant";
echo $name;
echo "<br>";
echo "the length of my string is " .  strlen($name);
echo "<br>";
echo "the length of my words is " . str_word_count($name);
echo "<br>";
echo "Our string is reverse now " . strrev($name);
echo "<br>";
// echo strpos($name , "sam");
// echo str_replace("Sam" , "Amir" , $name);
?>

