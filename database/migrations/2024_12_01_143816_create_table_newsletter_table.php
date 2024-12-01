<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('newsletter', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('folder_path')->nullable(); // To store the path of the uploaded folder
            $table->enum('category', ['luminary', 'featured']); // Category field with predefined options
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
        Schema::dropIfExists('newsletter');
    }
};
