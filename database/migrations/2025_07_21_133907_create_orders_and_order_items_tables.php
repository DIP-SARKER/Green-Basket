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
        // Schema::create('orders', function (Blueprint $table) {
        //     $table->increments('order_id');
        //     $table->unsignedBigInteger('user_id');
        //     $table->decimal('total', 10, 2);
        //     $table->enum('order_status', ['pending', 'processing', 'shipped', 'delivered', 'cancelled'])->default('pending');
        //     $table->enum('payment_status', ['unpaid', 'paid', 'failed'])->default('unpaid');
        //     $table->text('shipping_address')->nullable();
        //     $table->unsignedInteger('discount_id')->nullable(); // match discounts.discount_id
        //     $table->timestamps();

        //     $table->foreign('user_id')->references('user_id')->on('users');
        //     $table->foreign('discount_id')->references('discount_id')->on('discounts');
        // });

        // Schema::create('order_items', function (Blueprint $table) {
        //     $table->increments('order_item_id');
        //     $table->unsignedInteger('order_id');
        //     $table->unsignedInteger('variant_id');
        //     $table->integer('quantity');
        //     $table->decimal('price', 10, 2);
        //     $table->timestamps();

        //     $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
        //     $table->foreign('variant_id')->references('variant_id')->on('product_variants');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
    }
};
