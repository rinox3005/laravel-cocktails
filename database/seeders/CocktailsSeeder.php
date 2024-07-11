<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $cocktail = new Cocktail();
            $cocktail->name = $faker->lexify('????');

            $cocktail->save();
        }
    }
}
