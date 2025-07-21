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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id');
    $table->unsignedInteger('order_id');
    $table->decimal('amount',10,2);
    $table->enum('method',['rocket','nagad','bkash','cash_on_delivery']);
    $table->enum('status',['pending','completed','failed'])->default('pending');
    $table->timestamps();

    $table->foreign('order_id')->references('order_id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
