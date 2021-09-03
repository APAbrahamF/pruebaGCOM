<?php

namespace Database\Seeders;

use App\Models\Pets;
use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Pets::truncate();

        $faker = Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 100; $i++) {
            Pets::create([
                'name' => $faker->firstName($gender = null),
            ]);
        }
    }
}
