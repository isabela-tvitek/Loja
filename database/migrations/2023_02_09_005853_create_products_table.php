<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     * @return void
    */
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->boolean('active');
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
    */
    public function down() {
        Schema::dropIfExists('products');
    }
};
