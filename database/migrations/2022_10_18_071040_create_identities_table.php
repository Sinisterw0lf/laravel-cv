<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->default('Cyril');
            $table->string('lastName')->default('Bellec');
            $table->string('adress')->default('537 rue monseigneur lemonnier');
            $table->string('city')->default('Anneville Ambourville');
            $table->string('zip_code')->default('76480');
            $table->string('tel')->default('0698173359');
            $table->string('email', 100)->default('bellec.cyril@laposte.net');
            $table->text('about')->default('An experienced website developer specializing in websites and phone applications. Have done numerous projects involving front and back end development');
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
        Schema::dropIfExists('identities');
    }
};
