<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('ticket_id')->unique();         // e.g. #TKT-7841
            $table->string('subject');
            $table->enum('priority', ['low', 'medium', 'high']);
            $table->enum('status', ['open', 'pending', 'resolved'])->default('open');
            $table->string('customer_name');
            $table->string('customer_image')->nullable();
            $table->string('order_id')->nullable();        // e.g. #ORD-7841
            $table->string('tag')->nullable();             // e.g. Shipping Issue
            $table->text('excerpt');
            $table->text('full_message');
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
        Schema::create('support_replies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('support_ticket_id');
            $table->text('message');
            $table->string('sender_type')->default('admin'); // or 'customer'
            $table->timestamps();

            $table->foreign('support_ticket_id')->references('id')->on('support_tickets')->onDelete('cascade');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('support_tickets');
        Schema::dropIfExists('support_replies');
    }
};
