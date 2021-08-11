<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('cate_id');
            $table->string('name');
            $table->string('pro_slug');
            $table->string('short_desi');
            $table->string('long_desi');
            $table->string('orignal_price');
            $table->string('selling_price');
            $table->string('image');
            $table->string('qty');
            $table->tinyInteger('status');
            $table->string('tradning');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('meta_desi');

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
