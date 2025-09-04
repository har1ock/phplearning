<?php
#ex 5.1 Функція яка приймає число і повертає його квадрат
function numberToSquare($number){
    $square = $number**2;
    echo $square . "<br>";
}
#ex 5.2 Функція яка приймає параметр і виводить привітання
function sayHello($name = "guest"){
    echo "Hello, " . $name . "<br>";
}

#ex 5.3 Функція яка приймає 2 числа і виводить більше
function biggestOfTwo($a, $b){
    if($a > $b){
        echo "First number is bigger" . "<br>";
    } elseif($a < $b){
        echo "Secont number is bigger". "<br>";
    } else{
        echo "They are even". "<br>";
    }
}

#ex 5.4 Функція яка приймає масив чисел і повертає їх суму
function sumArray(array $numbers){
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    } echo "Sum of all number in array is " . $sum . "<br>";
}

numberToSquare(8);
sayHello("Anne");
biggestOfTwo(7, 8);
sumArray([2, 4, 6, 8, 10])

?>