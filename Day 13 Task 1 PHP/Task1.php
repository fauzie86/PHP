<?php
//Operator comparison
echo "(Task 1)";
echo "<br>";


$score = 75;

if ($score >= 90) {
    echo "Excellent!";
} elseif ($score >= 80) {
    echo "Very Good!";
} elseif ($score >= 70) {
    echo "Good!";
} elseif ($score >= 60) {
    echo "Average.";
} else {
    echo "Below Average.";
}


echo "<br>";
$driverAge = 30;

if ($driverAge >= 25 && $driverAge <= 65) {
    echo "You are eligible to drive.";
} else {
    echo "You are not eligible to drive.";
}


?>
