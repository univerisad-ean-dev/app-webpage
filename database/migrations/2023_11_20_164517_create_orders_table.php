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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_order_id')->constrained('type_order');
            $table->foreignId('pet_type_id')->constrained('pet_type');
            $table->foreignId('city_id')->constrained('cities');
            $table->string('name');
            $table->string('cc');
            $table->string('email');
            $table->date('date');
            $table->double('total');
            $table->double('payment_method');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
