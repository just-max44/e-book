<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Romans',
            'slug' => 'romans',
        ]);

        Category::create([
            'name' => 'Bande déssinée',
            'slug' => 'bandedessinee',
        ]);

        Category::create([
            'name' => 'Thriller',
            'slug' => 'thriller',
        ]);

        Category::create([
            'name' => 'Utile',
            'slug' => 'utile',
        ]);
    }
}
