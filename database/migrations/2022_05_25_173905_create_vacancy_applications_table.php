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
        Schema::create('vacancy_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality')->nullable();
            $table->string('gender');
            $table->text('address');
            $table->string('city');
            $table->string('province');
            $table->string('email');
            $table->string('phone');
            $table->unsignedInteger('vacancy_id');
            $table->string('years_of_experience');
            $table->string('work_expertise');
            $table->string('work_placement');
            $table->string('latest_education');
            $table->string('education_major');
            $table->text('additional_information')->nullable();
            $table->string('cv_url');
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
        Schema::dropIfExists('vacancy_applications');
    }
};
