<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Coste',
            'slug' => 'Coste',
            'details' => 'rotwein',
            'price' => 1499,
            'description' => 'guter Wein',
            'img' => '/img/coste-di-moro-montepulciano.jpg'
        ]);

        Product::create([
            'name' => 'Osteria',
            'slug' => 'Osteria',
            'details' => 'rotwein',
            'price' => 1299,
            'description' => 'dezenter Terassenwein',
            'img' => '/img/osteria-pinot-grigio.jpg'
        ]);
    }
}
