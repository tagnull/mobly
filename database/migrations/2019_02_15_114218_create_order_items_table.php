<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            // Identification
            $table->increments('id');
            $table->integer('order_id');
            $table->string('sku', 30)->nullable();
            $table->string('barcode', 13)->nullable();
            
            // Info data
            $table->string('name', 100);
            $table->integer('quantity');
            $table->string('url', 255)->nullable();
            
            // Price
            $table->float('single_price')->default(0.00);
            $table->float('total_price')->default(0.00);
            
            // Timestamps
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
