<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['name' => 'Alfajor'],
            ['name' => 'Chocolate'],
            ['name' => 'Gomita'],
            ['name' => 'Caramelo'],
            ['name' => 'Galletita'],
            ['name' => 'Nougat'],
        ]);
    }
}
