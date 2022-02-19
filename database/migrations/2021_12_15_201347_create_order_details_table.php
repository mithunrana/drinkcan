<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('OrderID');
            $table->integer('ProductID');
            $table->integer('Qty');
            $table->decimal('Price', $precision = 15, $scale = 2)->default(0);
            $table->decimal('TaxAmount', $precision = 15, $scale = 2)->default(0);
            $table->decimal('Weight', $precision = 8, $scale = 2)->default(0);
            $table->char('Color', 100)->nullable();
            $table->integer('RestockQuantity')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
