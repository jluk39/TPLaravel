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
            ['name' => 'Alfajor Jorgito', 'description' => 'Clásico alfajor argentino de dulce de leche', 'type_id' => 1, 'price' => 850.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/748aad43-7db0-4565-a88f-699019c75337.jpg', 'is_visible' => true],
            ['name' => 'Bon O Bon', 'description' => 'Bombón con relleno de crema de maní', 'type_id' => 2, 'price' => 400.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/latam5TJIUP.jpg', 'is_visible' => true],
            ['name' => 'Tita', 'description' => 'Galleta cubierta con chocolate', 'type_id' => 2, 'price' => 800.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/64060a3cf5af1b0f8aea35b9.jpg', 'is_visible' => true],
            ['name' => 'Rhodesia', 'description' => 'Galleta de chocolate con relleno de crema', 'type_id' => 2, 'price' => 578.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/6495e6c0776c5f92224c64c3.jpg', 'is_visible' => true],
            ['name' => 'Mogul', 'description' => 'Gomitas de diferentes sabores frutales', 'type_id' => 3, 'price' => 342.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/7790580602000.jpg', 'is_visible' => true],
            ['name' => 'Flynn Paff', 'description' => 'Caramelos masticables de sabores variados', 'type_id' => 3, 'price' => 1300.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/278dfe27-c76a-4e44-a838-9ae3c9b4e574.jpg', 'is_visible' => true],
            ['name' => '9 de Oro', 'description' => 'Galletitas ideales para acompañar el mate', 'type_id' => 4, 'price' => 904.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/7792200000128.jpg', 'is_visible' => true],
            ['name' => 'Alfajor Cachafaz', 'description' => 'Alfajor premium de chocolate y mouse', 'type_id' => 1, 'price' => 1603.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/e73cd757-ff48-4d9d-84c1-f7b672241af7.jpg', 'is_visible' => true],
            ['name' => 'Mantecol', 'description' => 'Turrón de maní tradicional argentino', 'type_id' => 5, 'price' => 1672.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/b2931299-dcb8-473a-83c9-407b4fadbc03.jpg', 'is_visible' => true],
            ['name' => 'Bombones Franuí Semiamargo', 'description' => 'Bombones helados de frambuesa', 'type_id' => 2, 'price' => 5449.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/7798147780062.jpg', 'is_visible' => true],
            ['name' => 'Ferrero Rocher', 'description' => 'Delicado bombón con avellanas', 'type_id' => 2, 'price' => 1905.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/78909434.jpg', 'is_visible' => true],
            ['name' => 'D.R.F. Naranja', 'description' => 'Primeras pastillas elaboradas en el país', 'type_id' => 3, 'price' => 283.00, 'image_url' => 'https://images.deliveryhero.io/image/pedidosya/products/48b46716-75ea-45a3-a7e4-0293630436df.jpg', 'is_visible' => true],
        ]);
    }
}
