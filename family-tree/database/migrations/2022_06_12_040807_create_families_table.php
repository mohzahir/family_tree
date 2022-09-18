<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('big_family_id');
            $table->foreign('big_family_id')->references('id')->on('big_families');
            $table->unsignedBigInteger('father_id');
            $table->foreign('father_id')->references('id')->on('people');
            $table->unsignedBigInteger('mother_id');
            $table->foreign('mother_id')->references('id')->on('people');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->date('marriage_date')->nullable();
            $table->boolean('is_divorced')->default(0);
            $table->date('divorce_date')->nullable();
            $table->integer('sons_count')->nullable()->default(0);
            $table->integer('daughters_count')->nullable()->default(0);
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
        Schema::dropIfExists('families');
    }
}
