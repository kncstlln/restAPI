<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'title' => 'Jacket',
            'description' => 'Wool Cloth Jacket',
            'currency' => 'PHP',
            'price' => 1234.56,
            "brand" => "Louis Vuitton",
            "category" => "apparel",
            "image" => "https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200" 
            ],
            [
            'title' => 'Makabayan',
            'description' => 'Alamin ang Pilipinas',
            'currency' => 'PHP',
            'price' => 1234.56,
            "brand" => "Phoenix",
            "category" => "book",
            "image" => "https://www.ethanproductions.com/books-newDB/images/9789710422913.jpg" 
            ],
            [
            'title' => 'Apple Iphone 14 Pro Max',
            'description' => 'Latest Iphone',
            'currency' => 'PHP',
            'price' => 500000.56,
            "brand" => "Apple",
            "category" => "electronic device",
            "image" => "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-14-pro-model-unselect-gallery-1-202209?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1660753619946" 
            ]
        ]);
    }
}
