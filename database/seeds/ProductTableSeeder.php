<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $product = new \App\Product([
                'imagePath' => 'http://4.bp.blogspot.com/-Jx6_gq3TQWE/URHdRxG8inI/AAAAAAAAASQ/dJTDMUUYg6Q/s1600/harry+potter+book+cover.jpg',
                'title' => 'Harry Patter',
                'description' => 'Coolest book',
                'price' => 10

                ]);
            $product -> save();

            $product = new \App\Product([
                'imagePath' => 'http://4.bp.blogspot.com/-Jx6_gq3TQWE/URHdRxG8inI/AAAAAAAAASQ/dJTDMUUYg6Q/s1600/harry+potter+book+cover.jpg',
                'title' => 'Harry Patter',
                'description' => 'Coolest book',
                'price' => 10

                ]);
            $product -> save();

            $product = new \App\Product([
                'imagePath' => 'http://4.bp.blogspot.com/-Jx6_gq3TQWE/URHdRxG8inI/AAAAAAAAASQ/dJTDMUUYg6Q/s1600/harry+potter+book+cover.jpg',
                'title' => 'Harry Patter',
                'description' => 'Coolest book',
                'price' => 10

                ]);
            $product -> save();

            $product = new \App\Product([
                'imagePath' => 'http://4.bp.blogspot.com/-Jx6_gq3TQWE/URHdRxG8inI/AAAAAAAAASQ/dJTDMUUYg6Q/s1600/harry+potter+book+cover.jpg',
                'title' => 'Harry Patter',
                'description' => 'Coolest book',
                'price' => 10

                ]);
            $product -> save();

            $product = new \App\Product([
                'imagePath' => 'http://4.bp.blogspot.com/-Jx6_gq3TQWE/URHdRxG8inI/AAAAAAAAASQ/dJTDMUUYg6Q/s1600/harry+potter+book+cover.jpg',
                'title' => 'Harry Patter',
                'description' => 'Coolest book',
                'price' => 10

                ]);
            $product -> save();

            $product = new \App\Product([
                'imagePath' => 'http://4.bp.blogspot.com/-Jx6_gq3TQWE/URHdRxG8inI/AAAAAAAAASQ/dJTDMUUYg6Q/s1600/harry+potter+book+cover.jpg',
                'title' => 'Harry Patter',
                'description' => 'Coolest book',
                'price' => 10

                ]);
            $product -> save();
    }
}
