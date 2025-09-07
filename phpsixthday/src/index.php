<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require __DIR__ . '/vendor/autoload.php';

    use App\Models\User;
    use App\Services\Auth;
    use App\Utils\Math;

    $user = new User("Bob");
    $auth = new Auth();
    $auth->login($user);
    $math = new Math();
    $numbers = [1, 2, 3, 4, 5];
    $result =  $math->sum($numbers);
    echo $result;

    ?>
</body>
</html>