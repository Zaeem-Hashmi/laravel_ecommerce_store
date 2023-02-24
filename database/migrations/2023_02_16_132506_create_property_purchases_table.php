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
        Schema::create('property_purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id')->nullable();

            $table->double('purchase_price')->nullable();
            $table->string('p_owner_name')->nullable();
            $table->bigInteger('p_owner_phone')->nullable();
            $table->string('p_owner_email')->nullable();

            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_purchases');
    }
};
