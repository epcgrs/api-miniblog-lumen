<?php

namespace App\Providers;

use App\Repositories\Interfaces\IPostRepository;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppRepositoryProvider extends ServiceProvider
{
    /**
     * Register any application repositories.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IPostRepository::class, PostRepository::class);
    }
}
