<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */



    public function boot()
    {

        Paginator::useBootstrap();

        
        Gate::define('owner', function (User $user) {
            return  $user->email === 'rustamovramziddin7@gmail.com';
        });

        Gate::define('super-admin', function ($user) {
            return $user->admin()->exists() && $user->admin->is_active;
        });

        Gate::define('shop-owner', function ($user) {
            return $user->shopOwner()->exists();
        });
    }
}