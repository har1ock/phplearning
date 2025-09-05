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
    $acc1 ->deposit(500);
    $acc1 ->withdraw(300);
    echo $acc1->getBalance();
    ?>
</body>
</html>