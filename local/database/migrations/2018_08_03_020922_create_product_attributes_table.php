<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->integer('prod_id')
                ->unsigned()
                ->nullable();
            $table->foreign('prod_id')
                ->references('prod_id')
                ->on('products')
                ->onDelete('cascade');
            $table->integer('att_value_id')
                ->unsigned()
                ->nullable();
            $table->foreign('att_value_id')
                ->references('att_value_id')
                ->on('attribute_values')
                ->onDelete('cascade');
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
        Schema::dropIfExists('product_attributes');
    }
}
