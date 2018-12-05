<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    public function run()
    {
        Category::create([
            'name' => 'Paysages',
        ]);
        Category::create([
            'name' => 'Maisons',
        ]);
        Category::create([
            'name' => 'Personnages',
        ]);
        Category::create([
            'name' => 'Animaux',
        ]);
        Category::create([
            'name' => 'Végétation',
        ]);
    }
}