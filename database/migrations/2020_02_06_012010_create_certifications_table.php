<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('certName', 100);
            $table->string('issuerName', 100);
            $table->string('issuerLink', 100);
            $table->string('certLink', 100)->nullable();
            $table->string('certNumber', 100)->nullable();
            $table->string('certType', 50);
            $table->integer('workLoad')->nullable();
            $table->date('startDate');
            $table->date('endDate')->nullable();
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
        Schema::dropIfExists('certifications');
    }
}
