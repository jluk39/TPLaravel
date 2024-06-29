<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candies')->insert([
            ['name' => 'Alfajor Jorgito', 'description' => 'Clásico alfajor argentino de dulce de leche', 'type_id' => 1, 'price' => 400.00, 'image_id' => 1, 'is_visible' => true],
            ['name' => 'Bon O Bon', 'description' => 'Bombón con relleno de crema de maní', 'type_id' => 2, 'price' => 400.00, 'image_id' => 2, 'is_visible' => true],
            ['name' => 'Tita', 'description' => 'Galleta cubierta con chocolate', 'type_id' => 2, 'price' => 800.00, 'image_id' => 3, 'is_visible' => true],
            ['name' => 'Rhodesia', 'description' => 'Galleta de chocolate con relleno de crema', 'type_id' => 2, 'price' => 578.00, 'image_id' => 4, 'is_visible' => true],
            ['name' => 'Mogul', 'description' => 'Gomitas de diferentes sabores frutales', 'type_id' => 3, 'price' => 342.00, 'image_id' => 5, 'is_visible' => true],
            ['name' => 'Flynn Paff', 'description' => 'Caramelos masticables de sabores variados', 'type_id' => 3, 'price' => 1300.00, 'image_id' => 6, 'is_visible' => true],
            ['name' => '9 de Oro', 'description' => 'Galletitas ideales para acompañar el mate', 'type_id' => 4, 'price' => 904.00, 'image_id' => 7, 'is_visible' => true],
            ['name' => 'Alfajor Cachafaz', 'description' => 'Alfajor premium de chocolate y mouse', 'type_id' => 1, 'price' => 1603.00, 'image_id' => 8, 'is_visible' => true],
            ['name' => 'Mantecol', 'description' => 'Turrón de maní tradicional argentino', 'type_id' => 5, 'price' => 1672.00, 'image_id' => 9, 'is_visible' => true],
            ['name' => 'Bombones Franuí Semiamargo', 'description' => 'Bombones helados de frambuesa', 'type_id' => 2, 'price' => 5449.00, 'image_id' => 10, 'is_visible' => true],
            ['name' => 'Ferrero Rocher', 'description' => 'Delicado bombón con avellanas', 'type_id' => 2, 'price' => 1905.00, 'image_id' => 11, 'is_visible' => true],
            ['name' => 'D.R.F. Naranja', 'description' => 'Primeras pastillas elaboradas en el país', 'type_id' => 3, 'price' => 283.00, 'image_id' => 12, 'is_visible' => true],
        ]);
    }
}
