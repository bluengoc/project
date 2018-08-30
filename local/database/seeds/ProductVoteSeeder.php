<?php

use Illuminate\Database\Seeder;

class ProductVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model\ProductVote::class,5)->create(); 
    }
}
