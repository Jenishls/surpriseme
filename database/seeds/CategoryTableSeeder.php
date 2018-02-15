<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'CategoryId' => 1,
                'CategoryName' => 'Men',
            ),
            1 => 
            array (
                'CategoryId' => 2,
                'CategoryName' => 'Women',
            ),
            2 => 
            array (
                'CategoryId' => 3,
                'CategoryName' => 'Kids',
            ),
            3 => 
            array (
                'CategoryId' => 4,
                'CategoryName' => 'Others',
            ),
        ));
        
        
    }
}