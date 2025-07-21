<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // create_products_table
Schema::create('products', function (Blueprint $table) {
    $table->increments('product_id');
    $table->unsignedInteger('farmer_id');
    $table->unsignedInteger('category_id');
    $table->string('name');
    $table->text('description')->nullable();
    $table->string('image_url')->nullable();
    $table->timestamps();

    $table->foreign('farmer_id')->references('farmer_id')->on('farmers');
    $table->foreign('category_id')->references('category_id')->on('categories');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
