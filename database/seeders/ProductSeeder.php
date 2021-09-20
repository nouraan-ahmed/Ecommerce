<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo Mobile',
                'price' => '310',
                'description' => 'A Smartphone with 6GB Ram And another Features',
                'category' => 'Mobile',
                'gallery'=> 'https://m.media-amazon.com/images/I/41+5uZBteLL.jpg'
            ],
            [
                'name' => 'Samsung TV',
                'price' => '450',
                'description' => 'A Smart TVe Features',
                'category' => 'Mobile',
                'gallery'=> 'https://images.samsung.com/is/image/samsung/levant-fhd-t5300-ua43t5300auxtw-frontblack-229857917?$684_547_PNG$'
            ],
            [
                'name' => 'Apple TV',
                'price' => '510',
                'description' => 'A Smart TV Features',
                'category' => 'Mobile',
                'gallery'=> 'https://aitnews.com/wp-content/uploads/2020/10/tvos11-apple-tv-siri-search-hero.jpg'
            ],
            [
                'name' => 'Smart TV',
                'price' => '450',
                'description' => 'A Smart TV Features',
                'category' => 'Mobile',
                'gallery'=> 'https://support.apple.com/library/content/dam/edam/applecare/images/en_US/appleapps/tvapp/tvos13-smart-tv-apple-tv-app-hero.jpg'
            ]
        ]);
    }
}
