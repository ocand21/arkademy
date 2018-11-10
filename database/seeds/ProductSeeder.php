<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          $product1 = new Product();
          $product1->name = 'Sabun Wangi';
          $product1->category_id = '1';
          $product1->save();

          $product2 = new Product();
          $product2->name = 'Minuman Cola';
          $product2->category_id = '2';
          $product2->save();

          $product3 = new Product();
          $product3->name = 'Prenagon Gold';
          $product3->category_id = '3';
          $product3->save();

          $product4 = new Product();
          $product4->name = 'Aqua';
          $product4->category_id = '2';
          $product4->save();

          $product5 = new Product();
          $product5->name = 'Teh Botol';
          $product5->category_id = '2';
          $product5->save();

          $product6 = new Product();
          $product6->name = 'Sampo';
          $product6->category_id = '1';
          $product6->save();
    }
}
