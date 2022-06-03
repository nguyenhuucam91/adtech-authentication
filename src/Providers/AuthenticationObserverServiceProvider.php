<?php

namespace Adtech\Authentication\Providers;

use Adtech\Authentication\Observers\UserObserver;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AuthenticationObserverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        User::observe(UserObserver::class);
    }

    public function register()
    {

    }
}
