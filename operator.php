<?php
  echo "This is our operators in php";
  echo "<br>";

  /*
    operators php
    1. Arithmetic operator
    2. Assignment operator
    3. Comparison operator
    4. Logical operator

  */
  $a = 5;
  $b = 2;
 
//   arithmetic operator

echo " For a + b , the result is " . ($a + $b);
echo "<br>";
echo " For a - b , the result is " . ($a - $b);
echo "<br>";
echo " For a * b , the result is " . ($a * $b);
echo "<br>";
echo " For a / b , the result is " . ($a / $b);
echo "<br>";
echo " For a % b , the result is " . ($a % $b);

// Assignmnet operator
echo "<br>";
$x = $a;
echo "for x the value is" .$x;

echo "<br>";
$a += 6;
echo "for a the value is " .$a;

echo "<br>";
$a -= 3;
echo "for a the value is " .$a;

echo "<br>";
$a *= 3;
echo "for a the value is " .$a;

echo "<br>";
$a /= 3;
echo "for a the value is " .$a;

// Comparison operator
echo "<br>";
$p = 80;
$y = 78;

echo var_dump($p >= $y);
echo "<br>";
echo var_dump($p > $y);
echo "<br>";
echo var_dump($p <> $y);

echo "<br>";

// Logical operator

$m = false;
$n = false;

echo var_dump($m and $n);
echo "<br>";
echo var_dump($m && $n);
echo "<br>";
echo var_dump($m or $n);
echo "<br>";
echo var_dump($m || $n);
echo "<br>";
echo var_dump(!$m);
?>
