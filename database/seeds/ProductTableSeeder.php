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
        DB::table('products')->insert([
                'name'			=> 'Pant',
                'code'			=> '2011',
                'desc'			=>'Long pant with very soft finishing',
                'quantity'		=> 20,
                'price'			=> 200.22 ,
                'photo'			=> 'images/pi6.png'


               ]);

        DB::table('products')->insert([
                'name'			=> 'Pant2',
                'code'			=> '2012',
                'desc'			=>'Long pant with very soft finishing',
                'quantity'		=> 203,
                'price'			=> 100.22 ,
                'photo'			=> 'images/pi6.png'


               ]);

        DB::table('products')->insert([
                'name'			=> 'shart',
                'code'			=> '2014',
                'desc'			=>'Long pant with very soft finishing',
                'quantity'		=> 220,
                'price'			=> 2010.22 ,
                'photo'			=> 'images/pi4.png'


               ]);
        DB::table('products')->insert([
                'name'			=> 'shart2',
                'code'			=> '20177',
                'desc'			=>'Long pant with very soft finishing',
                'quantity'		=> 29,
                'price'			=> 455.22 ,
                'photo'			=> 'images/pi3.png'


               ]);
    }
}
