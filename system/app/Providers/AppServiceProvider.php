<?php

namespace App\Providers;

use App\Repositories\Interface\ReviewRepositoryInterface;
use App\Repositories\Interface\StoryRepositoryInterface;
use App\Repositories\ReviewRepository;
use App\Repositories\StoryRepository;
use App\Services\ReviewService;
use App\Services\StoryServices;
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
        $this->app->bind(
            StoryRepositoryInterface::class,
            StoryRepository::class
        );

        $this->app->bind(StoryServices::class,function ($app){
            return new StoryServices($app->make(StoryRepositoryInterface::class));
        });

        $this->app->bind(
            ReviewRepositoryInterface::class,
            ReviewRepository::class
        );

        $this->app->bind(ReviewService::class,function ($app){
            return new ReviewService($app->make(ReviewRepositoryInterface::class));
        });


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
