<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_tbl', function (Blueprint $table) {
            $table->bigIncrements('teachers_id');
            $table->String('teachers_name');
            $table->String('teachers_email');
            $table->String('teachers_phone');
            $table->String('teachers_address');
            $table->String('teachers_image');
            $table->String('teachers_department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers_tbl');
    }
}
