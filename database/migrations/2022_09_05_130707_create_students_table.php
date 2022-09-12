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
        Schema::create('students', function (Blueprint $table) {
            $table->string('studentid' ,9)->primary();
            $table->string('name');
            $table->integer('semester');
            $table->string('majorid');
            $table->unsignedBigInteger('userid');
            $table->date('birth');
            $table->string('address');
            
            $table->foreign('majorid')->references('majorid')->on('majors')->onDelete('cascade');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
