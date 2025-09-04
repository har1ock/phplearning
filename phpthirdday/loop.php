
<?php
#ex 3.1 Вивід всіх чисел від 1 до 20
for($n = 0; $n < 21; $n++){
    echo $n . " ";
}
echo "<br>";

#ex 3.2 Сума перших ста чисел
$sum = 0;
for($i = 0; $i < 101; $i++){
    $sum += $i;
}
echo $sum; 

echo "<br>";

#ex 3.3 Вивід значень масиву кожне з нового рядка
$fruits = ["apple", "pear", "banana"];
foreach ($fruits as $fruit){
    echo $fruit . "<br>";
}

# ex 3.4
$numbers = [2, 4, 6, 8];
$mult  = 1;
foreach($numbers as $number){
    $mult *= $number;
}
echo $mult;

?>
