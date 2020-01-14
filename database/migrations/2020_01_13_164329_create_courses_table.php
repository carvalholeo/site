<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('awardName', 150);
            $table->string('institutionName', 50);
            $table->string('institutionLink', 100);
            $table->string('awardLink', 100)->nullable();
            $table->string('awardNumber', 50)->nullable();
            $table->string('typeOfAward', 50);
            $table->integer('workLoad')->nullable();
            $table->date('startDate');
            $table->date('endDate')->nullable();
            $table->boolean('isFinished');
            $table->longText('description');
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
        Schema::dropIfExists('courses');
    }
}
