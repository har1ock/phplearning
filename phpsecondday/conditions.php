
<?php
#ex2.1
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send_age"])){
    $age = $_POST["age"];

if ($age < 0){
    echo("Бидло, введи правильний вік");
} elseif($age < 18){
    echo "Underage";
} elseif($age > 60){
    echo "Old";
} else{
    echo "Adult";
}
}
?>

<form method="post">
    Age: <input type="number" name="age">
    <button type="submit" name = "send_age">Send Age</button>
</form>

<?php
#ex2.2
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send_number"])){
    $number = $_POST["number"];

    if (is_numeric($number)){
        $number = (int)$number;

        if ($number != 0){

            if ($number %2 == 0){
            echo "The number is even<br>";
            } else{
            echo "The number is odd<br>";
            }

            if ($number > 0) {
            echo "The number is positive";
            } else {
            echo "The number is negative";
            }
        } else{
            echo "The number is 0";
        }
    } else {
        echo "Please enter a valid number";
    }
}

?>

<form method = "post">
    Number: <input type="number" name="number">
    <button type="submit" name = "send_number">Send Number</button>
</form>

<?php
#ex2.3
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send_day"])){
    $day = $_POST["day"];

    switch($day){
        case "Monday":
            echo "Today is Monday";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        case "Wednesday":
            echo "Today is Wednesday";
            break;
        case "Thursday":
            echo "Today is Thursday";
            break;
        case "Friday":
            echo "Today is Friday";
            break;
        case "Saturday":
            echo "Today is Saturday";
            break;
        case "Sunday":
            echo "Today is Sunday";
            break;
    }
}
?>

<form method = "post">
    Day: <input type="text" name="day">
    <button type="submit" name = "send_day">Send Day</button>
</form>

