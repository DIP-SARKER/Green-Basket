<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 100)->nullable();
            $table->string('phone', 20)->unique();
            $table->text('address')->nullable();
            $table->string('password');
            $table->unsignedInteger('products')->default(0);
            $table->boolean('status')->default(true); // true = active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
?>