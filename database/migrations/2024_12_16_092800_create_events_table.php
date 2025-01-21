<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Event name
            $table->string('type'); // Event type (e.g., Conference, Workshop)
            $table->string('location'); // Event location
            $table->date('date'); // Event date
            $table->integer('attendees')->default(0); // Number of attendees
            $table->timestamps(); // Created and updated timestamps
            $table->string('file_upload')->nullable();
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
}
