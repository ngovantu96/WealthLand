<?php

namespace App\Providers;

use App\Http\Repositories\BannerRepo\BannerRepositoryInterface;
use App\Http\Repositories\BannerRepo\BannerRepository;

use App\Http\Repositories\CategoryRepo\CategoryRepositoryInterface;
use App\Http\Repositories\CategoryRepo\CategoryRepository;

use App\Http\Repositories\IntroduceRepo\IntroduceRepositoryInterface;
use App\Http\Repositories\IntroduceRepo\IntroduceRepository;

use App\Http\Repositories\LandRepo\LandRepositoryInterface;
use App\Http\Repositories\LandRepo\LandRepository;


use App\Http\Repositories\PostRepo\PostRepository;
use App\Http\Repositories\PostRepo\PostRepositoryInterface;

use App\Http\Repositories\UserRepo\UserRepository;
use App\Http\Repositories\UserRepo\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(LandRepositoryInterface::class, LandRepository::class);
        $this->app->bind(IntroduceRepositoryInterface::class, IntroduceRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // URL::forceScheme('https');
    }
}
