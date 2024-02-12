<?php

namespace App\Providers;

use App\Repositories\Interfaces\MenuRepositoriesInterface;
use App\Repositories\MenuRepositories;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MenuRepositoriesInterface::class,MenuRepositories::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
