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
            // Identification
            $table->increments('id');
            $table->uuid('uuid');
            $table->integer('user_id')->nullable();
            
            // Info data
            $table->string('name', 255);
            $table->string('email', 255)->nullable();
            $table->string('document', 15);
            $table->enum('status', ['delivered', 'processing', 'cancelled'])->default('processing');
            $table->enum('payment_method', ['boleto', 'check', 'cash', 'paypal']);
            $table->float('total', 11, 2)->default(0.00);
            $table->string('info', 255)->nullable();
            $table->json('address')->nullable();
            
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
        Schema::dropIfExists('orders');
    }
}
