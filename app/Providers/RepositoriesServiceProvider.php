<?php

namespace App\Providers;

use App\Repositories\Interfaces\{KeranjangRepositoriesInterface, MenuRepositoriesInterface,WhislistRepositoriesInterface};
use App\Repositories\{KeranjangRepositories, MenuRepositories,WhislistRepositories};
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MenuRepositoriesInterface::class,MenuRepositories::class);
        $this->app->bind(WhislistRepositoriesInterface::class,WhislistRepositories::class);
        $this->app->bind(KeranjangRepositoriesInterface::class,KeranjangRepositories::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
