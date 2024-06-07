<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newProduct = new Product();
            $newProduct->name = $faker->word();
            $newProduct->description = $faker->paragraph();
            $newProduct->price = $faker->randomFloat(2, 10, 1000);
            $newProduct->image = 'https://picsum.photos/200/300';
            $newProduct->save();
        }
    }
}
