<?php

namespace App\Providers;

use App\Services\Balance\BalanceServiceInterface;
use App\Services\Balance\v1\BalanceService;
use App\Services\User\UserServiceInterface;
use App\Services\User\v1\UserService;
use App\ThirdParties\Banks\A\Implementations\AClientInterface;
use App\ThirdParties\Banks\A\Implementations\v1\AClient;
use App\ThirdParties\Banks\B\Implementations\BClientInterface;
use App\ThirdParties\Banks\B\Implementations\v1\BClient;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(BalanceServiceInterface::class, BalanceService::class);
        $this->app->bind(AClientInterface::class, AClient::class);
        $this->app->bind(BClientInterface::class, BClient::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
