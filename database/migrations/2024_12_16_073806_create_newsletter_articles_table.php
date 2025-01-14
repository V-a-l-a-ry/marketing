<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category_id');
            $table->string('content_file')->nullable()->after('title');
            $table->date('send_date')->nullable();
            $table->integer('opens')->default(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('newsletters');
    }
};
