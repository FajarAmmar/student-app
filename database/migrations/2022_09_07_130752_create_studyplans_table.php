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
        Schema::create('studyplans', function (Blueprint $table) {
            $table->string('planid' ,7)->primary();
            $table->string('studentid' ,9);
            $table->string('classid' ,6);
            $table->integer('grade')->nullable();

            $table->foreign('studentid')->references('studentid')->on('students')->onDelete('cascade');
            $table->foreign('classid')->references('classid')->on('courseclasses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studyplans');
    }
};
