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
    //     Schema::create('reviews', function (Blueprint $table) {
    //         $table->increments('review_id');
    // $table->unsignedBigInteger('user_id');
    // $table->unsignedInteger('product_id');
    // $table->tinyInteger('rating');
    // $table->text('comment')->nullable();
    // $table->timestamps();

    // $table->foreign('user_id')->references('user_id')->on('users');
    // $table->foreign('product_id')->references('product_id')->on('products');
    //     });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
