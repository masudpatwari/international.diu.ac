<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('type_of_agent', ['company', 'individual']);
            $table->string('country_name');
            $table->text('present_address');
            $table->string('present_mobile_no', 20);
            $table->string('present_fax_no', 20);
            $table->text('permanent_address');
            $table->string('permanent_lan_phone_no', 20);
            $table->string('permanent_mobile_no', 20);
            $table->string('permanent_fax_no',20);
            $table->string('primary_person_name',50);
            $table->string('primary_person_photo', 50)->nullable();
            $table->string('primary_person_designation',50);
            $table->string('primary_person_mobile_no',20);
            $table->string('primary_person_email',100);
            $table->string('secondary_person_name',50);
            $table->string('secondary_person_photo',50)->nullable();
            $table->string('secondary_person_designation',50);
            $table->string('secondary_person_mobile_no',20);
            $table->string('secondary_person_email',100);
            $table->string('trade_license',50)->nullable();
            $table->string('tin_certificate',50)->nullable();
            $table->string('whatsup_no',20)->nullable();
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
        Schema::dropIfExists('agents');
    }
}
