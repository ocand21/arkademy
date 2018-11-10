<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          $category1 = new ProductCategory();
          $category1->name = 'Peralatan Mandi';
          $category1->save();

          $category2 = new ProductCategory();
          $category2->name = 'Minuman Kemasan';
          $category2->save();


          $category3 = new ProductCategory();
          $category3->name = 'Produk Susu';
          $category3->save();

    }
}
