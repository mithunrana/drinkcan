<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeDemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_demos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('Name')->nullable();
            $table->text('Mobile')->nullable();
            $table->text('Email')->nullable();
            $table->integer('checkstatus')->default(0);
            $table->integer('orderstatus')->default(2);
            $table->longText('Address')->nullable();
            $table->longText('Comment')->nullable();;
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
        Schema::dropIfExists('home_demos');
    }
}
