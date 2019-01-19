<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('faculty');
            $table->string('department');
            $table->string('name');
            $table->string('duration');
            $table->integer('credit');
            $table->double('total_fee', 10, 2);
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
        Schema::dropIfExists('course_fees');
    }
}
