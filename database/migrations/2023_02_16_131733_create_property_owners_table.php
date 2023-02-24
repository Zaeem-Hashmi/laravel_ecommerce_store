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
        Schema::create('property_owners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id')->nullable();

            $table->string('name')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('email')->nullable();
            $table->string('gurantor_name')->nullable();
            $table->bigInteger('phone_number')->nullable();

            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_owners');
    }
};
