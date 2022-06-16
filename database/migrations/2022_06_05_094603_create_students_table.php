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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('fullname');
            // $table->string('student_id');
            $table->string('phone_num')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nameof_insti');
            $table->string('program');
            $table->string('batch_no');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('blood_group');
            $table->string('nationality');
            $table->string('national_id');
            $table->string('passport_no');
            $table->string('father_name');
            $table->string('father_num')->unique();
            $table->string('mother_name');
            $table->string('mother_num')->unique();
            $table->string('local_guardian');
            $table->string('guardian_num')->unique();
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('profile_image');
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
        Schema::dropIfExists('students');
    }
};
