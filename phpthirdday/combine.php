<?php

#ex 4.1 Згенерувати таблицю множення числа 5 від 1 до 10.
$number = 5;
for($m = 1; $m < 11; $m++){
    $res = $number * $m;
    echo $number . " * " . $m . " = " . $res . "<br>";
}

/*ex 4.2 Знайти середнє значення масиву і вивести певні фрази в
залежності від результату */
$i = 0;
$sum = 0;
$grades  = [12, 9, 8, 10, 7, 12];
foreach($grades as $grade){
    $sum += $grade;
    $i++;
}
$average = $sum / $i;

if($average >= 10){
    echo "Відмінник";
} else {
    echo "Старайся краще";
}

?>