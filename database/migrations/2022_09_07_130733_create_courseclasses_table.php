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
        Schema::create('courseclasses', function (Blueprint $table) {
            $table->string('classid' , 6)->primary();
            $table->string('courseid' ,5);
            $table->string('lectid' ,6);
            $table->string('day');

            $table->foreign('courseid')->references('courseid')->on('courses')->onDelete('cascade');
            $table->foreign('lectid')->references('lectid')->on('lectures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courseclasses');
    }
};
