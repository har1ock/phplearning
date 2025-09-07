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

    $user = new User("Bob");
    $auth = new Auth();
    $auth->login($user)
    ?>
</body>
</html>