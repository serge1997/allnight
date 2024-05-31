<?php

namespace App\Providers;

use App\Core\City\CityRepository;
use App\Core\City\CityRepositoryInterface;
use App\Core\Establishment\EstablishmentRepository;
use App\Core\Establishment\EstablishmentRepositoryInterface;
use App\Core\ImageEstablishment\ImageEstablishmentRepository;
use App\Core\ImageEstablishment\ImageEstablishmentRepositoryInterface;
use App\Core\State\StateRepository;
use App\Core\State\StateRepositoryInterface;
use App\Core\TypeEstablishment\TypeEstablishmentRepository;
use App\Core\TypeEstablishment\TypeEstablishmentRepositoryInterface;
use App\Core\User\UserRepositoryInterface;
use App\Core\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(StateRepositoryInterface::class, StateRepository::class);
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
        $this->app->bind(TypeEstablishmentRepositoryInterface::class, TypeEstablishmentRepository::class);
        $this->app->bind(EstablishmentRepositoryInterface::class, EstablishmentRepository::class);
        $this->app->bind(ImageEstablishmentRepositoryInterface::class, ImageEstablishmentRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
