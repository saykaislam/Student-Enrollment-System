<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->String('student_name');
            $table->String('student_roll');
            $table->String('student_father_name');
            $table->String('student_mother_name');
            $table->String('student_email');
            $table->String('student_phone');
            $table->String('student_address');
            $table->String('student_image');
            $table->String('student_password');
            $table->String('student_department');
            $table->String('student_admission_year');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_tbl');
    }
}
