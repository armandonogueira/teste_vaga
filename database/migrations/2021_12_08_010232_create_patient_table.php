<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->id();
            $table->string('name', '200')->nullable();
            $table->string('cpf', '14')->nullable();
            $table->string('telephone', '15')->nullable();
            $table->string('email', '80')->nullable();
            $table->string('zipcode', '15')->nullable();
            $table->string('address', '200')->nullable();
            $table->string('number', '5')->nullable();
            $table->string('birthdate', '10')->nullable();
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
        Schema::dropIfExists('patient');
    }
}
