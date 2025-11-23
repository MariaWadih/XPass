<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('location')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->decimal('ticket_price', 8, 2)->default(0.00);
            $table->integer('total_tickets')->default(0);
            $table->integer('available_tickets')->default(0);
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->enum('status', ['active', 'completed', 'cancelled'])->default('active');
            $table->foreignId('organizer_id')->constrained('users')->onDelete('cascade');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
