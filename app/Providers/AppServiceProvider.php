<?php

namespace App\Providers;
use App\User;
use Illuminate\Support\Facades\Gate;
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
        //public function register()
{
   Gate::define('admin',function(User $user){
       return $user->isAdmin();
   });
   Gate::define('simple', function(User $user){
       return $user->isSimple();
   });
}

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }
}
