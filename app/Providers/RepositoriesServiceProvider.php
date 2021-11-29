<?php

namespace App\Providers;

use App\Repositories\CompaniesRepository;
use App\Repositories\CompaniesRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CompaniesRepositoryInterface::class, CompaniesRepository::class);
    }
}
