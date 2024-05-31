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
        Schema::create('establishments_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->integer('establishment_id')->unsigned();
            $table->datetime('deleted_at')->nullable();
            $table->foreign('establishment_id')->references('id')
                ->on('establishments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishments_images');
    }
};
