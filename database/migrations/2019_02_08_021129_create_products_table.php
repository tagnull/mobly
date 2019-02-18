<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // Identification
            $table->increments('id');
            // $table->uuid('uuid');
            $table->string('sku', 30)->nullable();
            $table->string('barcode', 13)->nullable();
            
            // Info data
            $table->string('slug', 100)->unique();
            $table->string('name', 100);
            $table->string('summary', 255)->nullable();
            $table->text('description')->nullable();
            
            $table->float('old_price')->default(0.00);
            $table->float('price')->default(0.00);
            $table->integer('off')->default(0);
            
            $table->integer('stock_available')->nullable();
            
            // images
            // features
            // categories
            
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
        Schema::dropIfExists('products');
    }
}
