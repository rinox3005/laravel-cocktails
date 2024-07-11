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
        $names = [
            "Margarita",
            "Mojito",
            "Old Fashioned",
            "Pina Colada",
            "Martini",
            "Daiquiri",
            "Cosmopolitan",
            "Whiskey Sour",
            "Negroni",
            "Mai Tai",
            "Bloody Mary",
            "Gin Tonic",
            "Tequila Sunrise",
            "Caipirinha",
            "Long Island Iced Tea",
            "Manhattan",
            "Aperol Spritz",
            "Pisco Sour",
            "Tom Collins",
            "Mint Julep"
        ];

        $type_of_prep = [
            "Shaken",
            "Stirred",
            "Blended",
            "Muddled",
            "Built",
            "Layered",
            "Swizzled",
            "Thrown",
            "Rolled",
            "Smashed",
            "Float",
            "Infused",
            "Steeped",
            "Carbonated",
            "Flamed",
            "Nitro",
            "Frothy",
            "Foamed",
            "Clarified",
            "Fat-Washed"
        ];

        for ($i = 0; $i < 20; $i++) {
            $cocktail = new Cocktail();
            $cocktail->name = $faker->randomElement($names);
            $cocktail->price = $faker->randomFloat(2, 5, 100);
            $cocktail->description = $faker->paragraph(3);
            $cocktail->ingredients = 'alcool';
            $cocktail->type_of_prep = $faker->randomElement($type_of_prep);
            $cocktail->serving_temp = $faker->randomFloat(1, 0, 70);
            $cocktail->needs_ice = $faker->boolean();
            $cocktail->is_available = $faker->boolean();
            $cocktail->save();
        }
    }
}
