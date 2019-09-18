<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(
            'App\Cms\BaseRepository\BaseRepositoryInterface',
            'App\Cms\BaseRepository\BaseRepository'
        );

        $this->app->bind(
            'App\Cms\Users\Repositories\UserRepositoryInterface',
            'App\Cms\Users\Repositories\UserRepository'
        );

        $this->app->bind(
            'App\Cms\Pages\Repositories\PageRepositoryInterface',
            'App\Cms\Pages\Repositories\PageRepository'
        );
    }
}
