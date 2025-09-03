<?php
# Ex 1.1
$name = "Bob";
$age = 20;
$height = 1.80;
$isWorking = True;

echo "<p> Name: " . $name . "</p>";
echo "<p> Age: " . $age . "</p>";
echo "<p> Height: " . $height . "</p>";
if ($isWorking == True) {
    echo "Працює";
} else {
    echo "Безробітній";
}

# Ex 1.2
$a = 10;
$b = 8;
echo "<p>Sum = " . ($a + $b) . "</p>";
echo "<p>Average = ". (($a + $b)/2) . "</p>";

# Ex 1.3
$number = "123";
$number = (int)($number);
$number = $number + 10;
echo "<p>Number is ". ($number) . "</p>";


?>
