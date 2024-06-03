<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // public function run()
    // {
    //     \App\Models\User::factory(10)->create();
    //     \App\Models\User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++) {
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->email();
            $newUser->address = $faker->address();
            $newUser->payment_method = $faker->randomElement(['PayPal', 'Credit Card', 'Klarna']);
            $newUser->age = $faker->date();
            $newUser->password = $faker->password(6, 8);
            $newUser->save();
        }
    }
}
