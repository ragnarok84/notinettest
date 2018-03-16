<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product = new Product();
       $product->name = 'Balon';
       $product->price = 3000;
       $product->description = 'Esta es la mejor descripcion que hay en este mundo';
       $product->save();

       $product = new Product();
       $product->name = 'Tijera';
       $product->price = 4000;
       $product->description = 'Esta es la mejor descripcion que hay en este mundo';
       $product->save();

       $product = new Product();
       $product->name = 'Camisa';
       $product->price = 6000;
       $product->description = 'Esta es la mejor descripcion que hay en este mundo';
       $product->save();

       $product = new Product();
       $product->name = 'Zapatos';
       $product->price = 10000;
       $product->description = 'Esta es la mejor descripcion que hay en este mundo';
       $product->save();

       $product = new Product();
       $product->name = 'Anillo';
       $product->price = 3000;
       $product->description = 'Esta es la mejor descripcion que hay en este mundo';
       $product->save();

       $product = new Product();
       $product->name = 'PC';
       $product->price = 30000;
       $product->description = 'Esta es la mejor descripcion que hay en este mundo';
       $product->save();
    }
}
