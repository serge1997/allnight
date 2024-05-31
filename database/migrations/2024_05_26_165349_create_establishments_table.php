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
        Schema::create('establishments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('email', 40);
            $table->string('tel', 40);
            $table->string('cnpj', 20);
            $table->string('cep');
            $table->string('password');
            $table->string('neightborhood');
            $table->boolean('is_active')->default(true);
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('establishment_type_id')->unsigned();
            $table->foreign('state_id')->references('id')
                ->on('states')->onDelete('cascade');
            $table->foreign('establishment_type_id')->references('id')
                ->on('types_establishment')->onDelete('cascade');
            $table->foreign('city_id')->references('id')
                ->on('citys')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishments');
    }
};
