<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NecessaryDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Category
         */
        $categories = [
            'Desarrollo Web',
            'Diseño Web',
            'Desarrollo Móvil',
            'Diseño Móvil',
            'Desarrollo de videojuegos',
            'Diseño de videojuegos'
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name' => $category
            ]);
        }

        /**
         * Level
         */
        $levels = [
            'Principiante',
            'Intermedio',
            'Avanzado',
            'Experto'
        ];

        foreach ($levels as $level) {
            \App\Models\Level::create([
                'name' => $level
            ]);
        }

        /**
         * Price
         */
        $prices = [0, 10, 15, 20, 25, 30, 35, 40];

        foreach ($prices as $price) {
            \App\Models\Price::create([
                'value' => $price
            ]);
        }
    }
}
