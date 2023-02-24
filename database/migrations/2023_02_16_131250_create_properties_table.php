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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('property_code')->nullable();
            $table->string('property_type')->nullable();
            $table->bigInteger('phone_number')->nullable();
            $table->boolean('is_available')->default('1');
            $table->longText('property_description')->nullable();
            $table->string('country')->nullable();
            $table->string('town')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
