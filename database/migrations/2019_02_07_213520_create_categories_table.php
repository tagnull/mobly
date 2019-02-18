<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            // Identification
            $table->increments('id');
            // $table->uuid('uuid');
            $table->integer('parent_id')->nullable();
            
            // Record data
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            
            // Other information
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
        Schema::dropIfExists('categories');
    }
}
