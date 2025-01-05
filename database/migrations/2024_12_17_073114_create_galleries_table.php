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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Gallery title
            $table->enum('type', ['image', 'video', 'document']); // Media type
            $table->string('media_url'); // Path to uploaded media
            $table->enum('status', ['Draft', 'Scheduled', 'Sent'])->default('Draft'); // Status
            $table->date('send_date')->nullable(); // Optional send date
            $table->integer('opens')->default(0); // Default to 0 for number of opens
            $table->timestamps(); // Created_at and updated_at
        });
    }
    


    public function down()
    {
        Schema::dropIfExists('galleries');
    }
};
