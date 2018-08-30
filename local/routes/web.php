<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


// Route::get('comment','AdminController@getComment');
// Route::get('image','AdminController@getImage');
// Route::post('upload','AdminController@postUpload');
// Route::get('upload','AdminController@getUpload');


Route::namespace('Admin')->group(function(){
	Route::prefix('admin')->group(function(){
		Route::get('/', 'HomeController@index');
		Route::get('logout','HomeController@getLogout');
		Route::resource('product','ProductController');
		Route::resource('image','ImageController');
		Route::post('upload','AdminController@postUpload');
		Route::get('upload','AdminController@getUpload');
	});
});

/*Route::get('/customers',function(){
    $faker = Faker\Factory::create();

    $limit = 10;

    for ($i = 0; $i < $limit; $i++) {
        $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No' . $faker->phoneNumber . '<br>';
    }
});*/