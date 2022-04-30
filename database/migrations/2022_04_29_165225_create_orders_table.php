<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('order_code');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('order_price');
            $table->dateTime('order_date');
            $table->dateTime('delivery_date');
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
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
