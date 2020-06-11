<?php

namespace App\Providers;

use App\Services\Interfaces\IPostService;
use App\Services\PostService;
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
        $this->app->bind(IPostService::class, PostService::class);
    }
}
