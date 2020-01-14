<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsOnEducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('education', function (Blueprint $table) {
            $table->integer('workLoad')
                ->after('institutionLink')
                ->default(0)
                ->nullable();

            $table->longText('description')
                ->after('isFinished')
                ->default('');

            $table->float('globalGrade')
                ->after('workLoad')
                ->default(0);

            $table->string('registerNumber', 50)
                ->after('globalGrade')
                ->default(0)
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('education', function (Blueprint $table) {
            $table->dropColumn('description','workLoad', 'globalGrade', 'registerNumber');
        });
    }
}
