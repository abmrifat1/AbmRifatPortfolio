<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('profession');
            $table->text('image');
            $table->text('description');
            $table->string('work_title');
            $table->text('work_description');
            $table->string('experience_title');
            $table->text('experience_description');
            $table->string('education_title');
            $table->text('education_description');
            $table->string('achivement_title');
            $table->text('achivement_description');
            $table->string('address');
            $table->string('phone_number');
            $table->string('web_site');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('abouts');
    }
}
