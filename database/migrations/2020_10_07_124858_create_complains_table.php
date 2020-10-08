<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('Name')->nullable();
            $table->text('Mobile')->nullable();
            $table->text('Email')->nullable();
            $table->text('ComplainType')->nullable();
            $table->longText('ComplainDetails')->nullable();
            $table->bigInteger('ProductId')->unsigned();
            $table->integer('checkstatus')->default(0);
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
        Schema::dropIfExists('complains');
    }
}
