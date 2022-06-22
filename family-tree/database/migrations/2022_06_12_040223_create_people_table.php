<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign(['country_id'])->references('id')->on('countries');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign(['city_id'])->references('id')->on('cities');
            $table->string('name');
            $table->string('another_name')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->date('dateOfBirth')->nullable();
            $table->boolean('is_dead')->nullable()->default('0');
            $table->date('dateOfDeath')->nullable();
            $table->string('photo')->nullable();
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('people');
    }
}
