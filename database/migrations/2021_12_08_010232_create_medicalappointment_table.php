<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalappointment', function (Blueprint $table) {
            $table->id();
            $table->string('specialty', '10')->nullable();
            $table->string('doctor', '10')->nullable();
            $table->string('patient', '10')->nullable();
            $table->string('birthdate', '10')->nullable();
            $table->string('responsible_name', '80')->nullable();
            $table->string('responsible_cpf', '80')->nullable();
            $table->string('medicalappointment', '10')->nullable();
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
        Schema::dropIfExists('medicalappointment');
    }
}
