<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // residential, commercial, public, interior
            $table->text('description');
            $table->text('brief')->nullable();
            $table->string('location');
            $table->string('year');
            $table->string('area')->nullable(); // sq ft / sq m
            $table->string('image'); // hero image URL
            $table->json('gallery')->nullable(); // additional images
            $table->string('client_name')->nullable();
            $table->boolean('featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
