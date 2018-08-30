<?php

use Illuminate\Database\Seeder;

class ProductCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\ProductComment::class,5)->create(); 
    }
}
