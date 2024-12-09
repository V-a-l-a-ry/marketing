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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->text('photo_description')->nullable();
            $table->text('photo_comment')->nullable();
            $table->datetime('upload_time'); // Renamed for consistent snake_case
            $table->foreignId('gallery_id')->nullable()->constrained('galleries')->onDelete('cascade');
            $table->string('photo_path')->nullable(); // Removed 'after' as it is not allowed in schema creation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos'); // Corrected the table name
    }
};
