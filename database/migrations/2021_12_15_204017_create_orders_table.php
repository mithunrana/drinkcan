<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->integer('UserID');
            $table->decimal('TotalAmonut', $precision = 8, $scale = 2)->default(0);
            $table->decimal('SubTotal', $precision = 8, $scale = 2)->default(0);
            $table->string('PaymentMethod')->nullable();
            $table->string('DeliveryType')->nullable();
            $table->integer('CurrencyID')->nullable();
            $table->string('TransactionID')->nullable();
            $table->decimal('ShippingCharge', $precision = 8, $scale = 2)->default(0);
            $table->decimal('Vat', $precision = 8, $scale = 2)->default(0);
            $table->decimal('CuponDiscount', $precision = 8, $scale = 2)->default(0);
            $table->date('OrderDate')->nullable();
            $table->string('Status')->nullable()->default(0);
            $table->text('Comment')->nullable()->default(0);
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
        Schema::dropIfExists('orders');
    }
}
