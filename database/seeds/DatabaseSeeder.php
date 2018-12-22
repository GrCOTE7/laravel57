<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
    }
}


/*
php artisan clear-compiled 
composer dump-autoload
php artisan optimize
*/