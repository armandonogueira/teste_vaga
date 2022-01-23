<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('name', '200')->nullable();
            $table->string('birthdate', '10')->nullable();
            $table->string('gender', '1')->nullable();
            $table->string('cpf', '14')->nullable();
            $table->string('rg', '14')->nullable();
            $table->string('email', '80')->nullable();
            $table->integer('covenant');
            $table->string('cardnumber', '200')->nullable();
            $table->integer('healthplan');
            $table->string('telephone', '15')->nullable();
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
        Schema::dropIfExists('client');
    }
}
