<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $t=10;
        // for($i=0; $i<$t; $i++)
        // {

        	// DB::table('categorys')->insert([
        	// 	'cate_name'=>'Giay cao got',
        	// 	'cate_thumbnail'=>1,
        	// 	'cate_slug'=>'giay-cao-got',
        	// 	'cate_parent'=>1,
        	// 	],
        	// 	[
	        // 		'cate_name'=>'Giay bup be',
	        // 		'cate_thumbnail'=>2,
	        // 		'cate_slug'=>'giay-bup-be',
	        // 		'cate_parent'=>2,
        	// 	],
        	// 	[
	        // 		'cate_name'=>'Giay xang dan',
	        // 		'cate_thumbnail'=>3,
	        // 		'cate_slug'=>'giay-xang-dan',
	        // 		'cate_parent'=>3,
        	// 	],
        	// 	[
	        // 		'cate_name'=>'Boot',
	        // 		'cate_thumbnail'=>4,
	        // 		'cate_slug'=>'boot',
	        // 		'cate_parent'=>4,
        	// 	],
        	// 	[
	        // 		'cate_name'=>'Giay de xuong',
	        // 		'cate_thumbnail'=>5,
	        // 		'cate_slug'=>'giay-de-xuong',
	        // 		'cate_parent'=>5,
        	// 	]
        	// );
        
			//---------------------------------//
			// DB::table('products')->insert([
			// 	'prod_name'=>'Giay cao got',
			// 	'prod_code'=>'M01',
			// 	'prod_des'=>'Giay cao 5cm',
			// 	'prod_price'=>200000,
			// 	'prod_regular_price'=>150000,
			// 	'prod_sale_price'=>50000,
			// 	'prod_thumbnail'=>2,
			// 	'cate'=>1,
			// 	'prod_type'=>'Mui tron',
			// 	'prod_status'=>'Mau trang',
			// 	'prod_parent'=>1,
			// 	'prod_value_id'=>1,
			// ]);
			//---------------------------------//
			// DB::table('attributes')->insert([
			// 	'att_name'=>'Mau sac',
			// 	'att_slug'=>'mau-sac'
			// ]);
			//---------------------------------//
			// DB::table('attribute_values')->insert([
			// 	'att_id'=>1,
			// 	'att_value'=>'Mau den',
			// ]);
        
    	// }
    	$this->call(
    		[	
    			//CommentSeeder::class,
    			//CategorysSeeder::class,
    			//AttributeValueSeeder::class,
    			//AttributeSeeder::class,
    			//ImagesSeeder::class,
    			//OdersSeeder::class,
    			ProductSeeder::class,
    			//ProductAttributeSeeder::class,
    			//ProductCommentSeeder::class,
    			//ProductImagesSeeder::class,
    			//ProductOrderSeeder::class,
    			//ProductVoteSeeder::class
    			//VoteSeeder::class
    		]
    	);
    }
}
