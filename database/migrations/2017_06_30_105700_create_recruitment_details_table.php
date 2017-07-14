<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('person_name');
            $table->string('position');
            $table->timestamp('date_of_interview')->nullable();
            $table->string('assign_to');
            $table->string('last_status');
            $table->string('area_of_interest');
            $table->string('how_did_you');
            $table->string('remarks');
            $table->string('contact_no');
            $table->string('current_salary');
            $table->string('expected_salary');
            $table->string('notice_period');
            $table->timestamp('date_of_joining')->nullable();
            $table->string('preferred_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recruitment_details');
    }
}
