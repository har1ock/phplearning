<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Notifier.php';
    $emailNotifier = new EmailNotifier();
    $smsNotifier = new SmsNotifier();

    $alert1 = new AlertService ($emailNotifier);
    $alert1->critical("Термінове повідомлення!");

    $alert2 = new AlertService($smsNotifier);
    $alert2->critical("Термінове повідомлення!");
    ?>
</body>
</html>