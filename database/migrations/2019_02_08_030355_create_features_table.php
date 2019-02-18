<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            // Identification
            $table->increments('id');
            // $table->uuid('uuid');
            $table->integer('product_id');
            
            // Data
            $table->string('name', 80);
            $table->string('description', 160)->nullable();
            
            $table->boolean('status')->default(1);
            
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
        Schema::dropIfExists('features');
    }
}
