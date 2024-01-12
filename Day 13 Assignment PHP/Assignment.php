<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>

<?php

echo "(Assignment)";
echo "<br>";

// Task 1 (variable)
$name = "Mr.Bean";
$age = 25;
$city = "Japan";
echo "Task 1: My name is $name, I am $age years old, and I live in $city.<br><br>";

// Task 2 (Logical operator)
$grade = 85;
echo "Task 2: ";
if ($grade >= 90) {
    echo "Excellent!";
} elseif ($grade >= 80 && $grade <= 89) {
    echo "Good job!";
} elseif ($grade >= 70 && $grade <= 79) {
    echo "Keep it up!";
} else {
    echo "Needs improvement";
}
echo "<br><br>";

// Task 3 (loop for)
echo "Task 3: Numbers from 1 to 10:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<br>";

// Task 4 (Array)
$favoriteFruits = ["Apple", "Banana", "Orange"];
echo "Task 4: My favorite fruits are:<br>";
foreach ($favoriteFruits as $fruit) {
    echo "I like $fruit.<br>";
}
echo "<br>";

// Task 5 (Form - Get and post)
echo "Task 5: HTML Form<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $user_age = $_POST["user_age"];
    echo "Hello, $user_name! You are $user_age years old.";
}
?>

<!-- HTML Form -->
<form method="post" action="">
    <label>Name: <input type="text" name="user_name"></label><br>
    <label>Age: <input type="text" name="user_age"></label><br>
    <input type="submit" value="Submit">
</form>

<?php
// Task 6 (function)
echo "<br>Task 6: Function Example<br>";


function calculateSum($num1, $num2){
    $total = $num1 + $num2;
    echo "<h4>$num1 +$num2 = $total</h4>";
}
calculateSum(5, 7);
calculateSum(10, 15)

?>

</body>
</html>

