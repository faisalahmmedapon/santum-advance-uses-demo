<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = array(
            ['name'=>'1','detail'=>'Hello 1'],
            ['name'=>'2','detail'=>'Hello 2'],
            ['name'=>'3','detail'=>'Hello 3'],
            ['name'=>'4','detail'=>'Hello 4'],
            ['name'=>'5','detail'=>'Hello 5'],
            ['name'=>'6','detail'=>'Hello 6'],
            ['name'=>'7','detail'=>'Hello 7'],
            ['name'=>'8','detail'=>'Hello 8'],
        );

        foreach ($products as $product){
            Product::updateOrCreate($product);
        }
    }
}
