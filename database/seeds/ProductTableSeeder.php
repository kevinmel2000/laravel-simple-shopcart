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
        	'imagePath'=> 'http://pm1.narvii.com/6243/355ab0fa051d2ce93802342cceb2a64935cb19bb_hq.jpg',
        	'title'=>'Pico1',
        	'description'=> 'Pico adalah Uke yang kesepian , walaupun begitu pico adalah uke yang sangat imut 				 dan dicintai para pria',
        	'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'http://i0.kym-cdn.com/entries/icons/original/000/005/153/Bokuuu.png',
        	'title'=>'Pico2',
        	'description'=> 'Pico adalah Uke yang kesepian , walaupun begitu pico adalah uke yang sangat imut 				 dan dicintai para pria',
        	'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'http://i.ytimg.com/vi/E-TVKm7rA6g/maxresdefault.jpg',
        	'title'=>'Pico3',
        	'description'=> 'Pico adalah Uke yang kesepian , walaupun begitu pico adalah uke yang sangat imut 				 dan dicintai para pria',
        	'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'http://i1.kym-cdn.com/photos/images/facebook/000/899/363/b1f.jpg',
        	'title'=>'Pico4',
        	'description'=> 'Pico adalah Uke yang kesepian , walaupun begitu pico adalah uke yang sangat imut 				 dan dicintai para pria',
        	'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath'=> 'http://images5.fanpop.com/image/photos/29300000/Boku-no-Pico-ukes-uke-anime-guys-29351211-361-396.jpg',
        	'title'=>'Pico5',
        	'description'=> 'Pico adalah Uke yang kesepian , walaupun begitu pico adalah uke yang sangat imut 				 dan dicintai para pria',
        	'price'=> 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'=> 'http://pm1.narvii.com/6361/339fade42d9df98af58450ca167c0666f245ab63_hq.jpg',
            'title'=>'Eren Jaeger',
            'description'=> 'Eren adalah clueless uke milik Levi, namun kamu juga bisa memilikinya, levi bukanlah apa2',
            'price'=> 30
        ]);
        $product->save();

       
    }
}
