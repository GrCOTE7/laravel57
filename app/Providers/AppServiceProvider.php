<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
 /**
  * Bootstrap any application services.
  *
  * @return void
  */
 public function boot()
 {
  Blade::if('admin', function () {
   return auth()->check() && auth()->user()->admin;
  });
  if (request()->server("SCRIPT_NAME") !== 'artisan') {
   view()->share('categories', resolve(CategoryRepository::class)->getAll());
  }
 }

 /**
  * Register any application services.
  *
  * @return void
  */
 public function register()
 {
  //
 }
}
