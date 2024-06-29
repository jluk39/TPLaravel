<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            ['src' => 'candies/jorgito.jpg'],
            ['src' => 'candies/bonobon.jpg'],
            ['src' => 'candies/tita.jpg'],
            ['src' => 'candies/rhodesia.jpg'],
            ['src' => 'candies/mogul.jpg'],
            ['src' => 'candies/flynnpaff.jpg'],
            ['src' => 'candies/9deoro.jpg'],
            ['src' => 'candies/cachafaz.jpg'],
            ['src' => 'candies/mantecol.jpg'],
            ['src' => 'candies/franui.jpg'],
            ['src' => 'candies/ferrero.jpg'],
            ['src' => 'candies/drf.jpg'],
        ]);
    }
}
