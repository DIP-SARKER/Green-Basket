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
Schema::create('carts', function (Blueprint $table) {
    $table->increments('cart_id');
    $table->unsignedBigInteger('user_id');
    $table->timestamps();
    $table->foreign('user_id')->references('user_id')->on('users');
});

Schema::create('cart_items', function (Blueprint $table) {
    $table->increments('cart_item_id');
    $table->unsignedInteger('cart_id');
    $table->unsignedInteger('variant_id');
    $table->integer('quantity');
    $table->timestamps();
    $table->foreign('cart_id')->references('cart_id')->on('carts');
    $table->foreign('variant_id')->references('variant_id')->on('product_variants');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
        Schema::dropIfExists('cart_items');
    }
};
