<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foreign_student', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('permanent_address')->nullable();
            $table->string('permanent_telephone', 20)->nullable();
            $table->string('permanent_mobile', 20)->nullable();
            $table->text('present_address')->nullable();
            $table->string('present_telephone', 20)->nullable();
            $table->string('present_mobile', 20)->nullable();
            $table->text('address_in_bd')->nullable();
            $table->string('bd_telephone', 20)->nullable();
            $table->string('bd_mobile', 20)->nullable();
            $table->date('dob')->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('marital_status', 10)->nullable();
            $table->string('blood_group', 10)->nullable();
            $table->integer('religion', 10)->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('present_nationality');
            $table->string('country_of_birth')->nullable();
            $table->string('interested_subject');
            $table->string('passport_no', 20)->nullable();
            $table->string('type_of_passport', 20)->nullable();
            $table->date('date_of_issue')->nullable();
            $table->date('date_of_expire')->nullable();
            $table->date('date_of_last_visit_bd')->nullable();
            $table->string('last_visa_no', 20)->nullable();
            $table->string('visa_category', 20)->nullable();
            $table->string('visa_place_of_issue')->nullable();
            $table->date('visa_date_of_issue')->nullable();
            $table->date('visa_date_of_expire')->nullable();
            $table->date('date_of_arrival_bd')->nullable();
            $table->string('flight_no', 20)->nullable();
            $table->string('father_name', 50)->nullable();
            $table->string('father_nationality')->nullable();
            $table->string('father_mobile', 20)->nullable();
            $table->string('mother_name', 50)->nullable();
            $table->string('mother_nationality')->nullable();
            $table->string('mother_mobile', 20)->nullable();
            $table->string('spouse_name', 50)->nullable();
            $table->string('spouse_nationality')->nullable();
            $table->string('spouse_mobile', 20)->nullable();
            $table->string('guardian_name', 50)->nullable();
            $table->string('guardian_nationality')->nullable();
            $table->string('guardian_mobile', 20)->nullable();
            $table->string('emergency_name', 50)->nullable();
            $table->string('emergency_nationality')->nullable();
            $table->string('emergency_mobile', 20)->nullable();
            $table->integer('fg_monthly_income')->nullable();
            $table->string('o_name_of_exam', 50)->nullable();
            $table->string('o_group', 20)->nullable();
            $table->string('o_roll_no', 20)->nullable();
            $table->year('o_year_of_passing')->nullable();
            $table->string('o_letter_grade', 20)->nullable();
            $table->string('o_cgpa', 20)->nullable();
            $table->string('o_board', 20)->nullable();
            $table->text('o_link_of_certificate')->nullable();
            $table->string('o_registration_no', 20)->nullable();
            $table->string('t_name_of_exam', 50)->nullable();
            $table->string('t_group', 20)->nullable();
            $table->string('t_roll_no', 20)->nullable();
            $table->year('t_year_of_passing')->nullable();
            $table->string('t_letter_grade', 20)->nullable();
            $table->string('t_cgpa', 20)->nullable();
            $table->string('t_board', 20)->nullable();
            $table->text('t_link_of_certificate')->nullable();
            $table->string('t_registration_no', 20)->nullable();
            $table->string('student_id', 20)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('foreign_student');
    }
}
