<?php

use Illuminate\Database\Seeder;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\Categorys::class,10)->create(); 
    }
}
