<?php

namespace App\Providers;

use App\Contracts\ApplicantRepositoryInterface;
use App\Contracts\UserRepositoryInterface;
use App\Repositories\ApplicantRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ApplicantRepositoryInterface::class, ApplicantRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
