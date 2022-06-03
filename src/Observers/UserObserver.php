<?php

namespace Adtech\Authentication\Observers;

use App\Models\User;

class UserObserver
{
    public function saving(User $user)
    {
        $user->email = ucfirst($user->email);
    }
}
