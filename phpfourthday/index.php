<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Account.php';
    $acc1 = new Account('George', 200);
    $acc1->deposit(150);
    $acc1->withdraw(300);
    echo $acc1->getBalance() . "<br>";
    echo $acc1->getOwner() . "<br>";

    require_once 'Shape.php';
    $rect1 = new Rectangle(15, 10);
    echo $rect1->area() . "<br>";
    $tria1 = new Triangle(20, 25);
    echo $tria1->area() . "<br>"
    ?>

</body>
</html>