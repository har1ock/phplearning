<?php
namespace App\Services;

use App\Models\User;

class Auth{
    public function login(User $user): void{
        echo "Користував {$user->name} успішно увійшов!";

    }
}
?>