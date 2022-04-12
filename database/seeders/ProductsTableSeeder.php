<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->title = "john doe";
        $product->slug = "un quatre";
        $product->subtitle = "Un sous titre 1";
        $product->description = "Une grande description de plusieurs ligne";
        $product->price = "1000";
        $product->image ='https://via.placeholder.com/200x250';
        $product->save();

        $product = new Product();
        $product->title = "Un auteur 2";
        $product->slug = "Un trois";
        $product->subtitle = "Un sous titre 2";
        $product->description = "Une grande description de plusieurs ligne";
        $product->price = "1000";
        $product->image ='https://via.placeholder.com/200x250';
        $product->save();

        $product = new Product();
        $product->title = "Un auteur 3";
        $product->slug = "Un";
        $product->subtitle = "Un sous titre 3";
        $product->description = "Une grande description de plusieurs ligne";
        $product->price = "1000";
        $product->image ='https://via.placeholder.com/200x250';
        $product->save();

        $product = new Product();
        $product->title = "Un auteur 4";
        $product->slug = "Un deux";
        $product->subtitle = "Un sous titre 4";
        $product->description = "Une grande description de plusieurs ligne";
        $product->price = "1000";
        $product->image ='https://via.placeholder.com/200x250';
        $product->save();

    }
}
