<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('Title');
            $table->longText('Content');
            $table->bigInteger('FeaturedImage')->unsigned();
            $table->bigInteger('products_id')->unsigned();
            $table->text('ImageAltText')->nullable();
            $table->text('ImageTitleText')->nullable();
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
        Schema::dropIfExists('about_products');
    }
}
