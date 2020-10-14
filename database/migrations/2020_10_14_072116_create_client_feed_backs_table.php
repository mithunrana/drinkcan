<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientFeedBacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_feed_backs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('Name')->nullable();
            $table->longText('Details')->nullable();
            $table->bigInteger('FeaturedImage')->unsigned();
            $table->text('ImageAltText')->nullable();
            $table->text('ImageTitleText')->nullable();
            $table->integer('ActiveStatus')->default(0);
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
        Schema::dropIfExists('client_feed_backs');
    }
}
