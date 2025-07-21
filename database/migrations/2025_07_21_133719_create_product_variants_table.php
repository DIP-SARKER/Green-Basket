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
Schema::create('product_variants', function (Blueprint $table) {
    $table->increments('variant_id');
    $table->unsignedInteger('product_id');
    $table->string('label'); // e.g. "1kg", "5kg"
    $table->decimal('price',10,2);
    $table->integer('stock');
    $table->string('sku')->nullable();
    $table->timestamps();

    $table->foreign('product_id')->references('product_id')->on('products');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
