<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
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
                'name' => 'LG Mobile',
                'price' => "200",
                'description' => "A smartphone with 4Gb ram and much Feature",
                'category' => 'mobile',
                'gallery' => 'C:\Users\Lenovo\OneDrive\Desktop\laravel\Ecommerce_project\storage\image\download (1).jpg',
            ],
            [
                'name' => 'Oppo Mobile',
                'price' => "150",
                'description' => "A smartphone with 8Gb ram and much Feature",
                'category' => 'mobile',
                'gallery' => 'C:\Users\Lenovo\OneDrive\Desktop\laravel\Ecommerce_project\storage\image\download.jpg',
            ],
            [
                'name' => 'Sumsung Mobile',
                'price' => "300",
                'description' => "A smartphone with 16Gb ram and 4Gb rom and much Feature",
                'category' => 'mobile',
                'gallery' => 'C:\Users\Lenovo\OneDrive\Desktop\laravel\Ecommerce_project\storage\image\images.jpg',
            ],
            [
                'name' => 'Apple Mobile',
                'price' => "500",
                'description' => "A smartphone with 64Gb ram and much Feature",
                'category' => 'mobile',
                'gallery' => 'C:\Users\Lenovo\OneDrive\Desktop\laravel\Ecommerce_project\storage\image\iphone-14-model-unselect-gallery-2-202303_GEO_EMEA_FMT_WHH',
            ]
        ]);
    }
}
