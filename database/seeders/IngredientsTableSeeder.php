<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ["name" => "Tequila", "type" => "Distillato", "grade" => 40],
            ["name" => "Triple Sec", "type" => "Liquore", "grade" => 30],
            ["name" => "Succo di lime", "type" => "Succo", "grade" => 0],
            ["name" => "Sale", "type" => "Condimento", "grade" => 0],
            ["name" => "Rum bianco", "type" => "Distillato", "grade" => 40],
            ["name" => "Zucchero", "type" => "Dolcificante", "grade" => 0],
            ["name" => "Menta", "type" => "Erba aromatica", "grade" => 0],
            ["name" => "Soda", "type" => "Bevanda", "grade" => 0],
            ["name" => "Vodka", "type" => "Distillato", "grade" => 40],
            ["name" => "Succo di mirtillo", "type" => "Succo", "grade" => 0],
            ["name" => "Gin", "type" => "Distillato", "grade" => 40],
            ["name" => "Vermouth secco", "type" => "Liquore", "grade" => 18],
            ["name" => "Scorza di limone", "type" => "Frutta", "grade" => 0],
            ["name" => "Oliva", "type" => "Frutta", "grade" => 0],
            ["name" => "Bourbon", "type" => "Distillato", "grade" => 40],
            ["name" => "Rye Whiskey", "type" => "Distillato", "grade" => 40],
            ["name" => "Amari", "type" => "Liquore", "grade" => 35],
            ["name" => "Acqua", "type" => "Bevanda", "grade" => 0],
            ["name" => "Scorza di arancia", "type" => "Frutta", "grade" => 0],
            ["name" => "Latte di cocco", "type" => "Bevanda", "grade" => 0],
            ["name" => "Succo di ananas", "type" => "Succo", "grade" => 0],
            ["name" => "Succo di pomodoro", "type" => "Succo", "grade" => 0],
            ["name" => "Salsa Worcestershire", "type" => "Condimento", "grade" => 0],
            ["name" => "Tabasco", "type" => "Condimento", "grade" => 0],
            ["name" => "Sale di sedano", "type" => "Condimento", "grade" => 0],
            ["name" => "Pepe nero", "type" => "Condimento", "grade" => 0],
            ["name" => "Cachaça", "type" => "Distillato", "grade" => 40],
            ["name" => "Lime", "type" => "Frutta", "grade" => 0],
            ["name" => "Albume d'uovo", "type" => "Altro", "grade" => 0],
            ["name" => "Sciroppo di granatina", "type" => "Dolcificante", "grade" => 0],
            ["name" => "Rum scuro", "type" => "Distillato", "grade" => 40],
            ["name" => "Orzata", "type" => "Dolcificante", "grade" => 0],
            ["name" => "Acqua tonica", "type" => "Bevanda", "grade" => 0],
            ["name" => "Spicchio di lime", "type" => "Frutta", "grade" => 0]
        ];

        foreach ($ingredients as $ingredient) {
            $db_ingredient = new Ingredient();

            $db_ingredient->name = $ingredient['name'];
            $db_ingredient->type = $ingredient['type'];
            $db_ingredient->grade = $ingredient['grade'];

            $db_ingredient->save();
        }
    }
}
