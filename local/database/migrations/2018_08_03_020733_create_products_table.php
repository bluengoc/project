<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('prod_id')->unsigned();
            $table->string('prod_name');
            $table->string('prod_code')->nullable();
            $table->longText('prod_des')->nullable();
            $table->integer('prod_price')->nullable();
            $table->integer('prod_regular_price')->nullable();
            $table->integer('prod_sale_price')->nullable();
            $table->integer('prod_thumbnail')->nullable();
            $table->integer('cate')->unsigned();
            $table->foreign('cate')->references('cate_id')->on('categorys')->onDalete('cascade');
            $table->string('prod_type');
            $table->string('prod_status');
            $table->integer('prod_parent')->nullable();
            $table->integer('prod_value_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
