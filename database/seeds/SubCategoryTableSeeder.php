<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('sub_categories')->insert([
                  'name'	=> 'T-Shirt',
                  'cid'		=>1

                 ]);
         DB::table('sub_categories')->insert([
                  'name'	=> 'Pant',
                   'cid'	=>1

                 ]);
         DB::table('sub_categories')->insert([
                  'name'	=> 'Tops',
                   'cid'		=>2
                 ]);
         DB::table('sub_categories')->insert([
                  'name'	=> 'Saree',
                   'cid'	=>2
                 ]);
         DB::table('sub_categories')->insert([
                  'name'	=> 'Pen',
                   'cid'	=>3
                 ]);
    }
}
