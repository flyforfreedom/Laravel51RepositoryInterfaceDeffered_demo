<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PostRepositoryInterface;
use App\Repositories\PostRepository;
use App\Repositories\MyRepository;

/**
 * Class RepositoryServiceProvider
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
//            MyRepository::class
        );
    }


    /**
     * Get the services provided by the provider
     *
     * @return array
     */
    public function provides()
    {
        return [PostRepositoryInterface::class];
    }
}
