<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191);
            $table->date('birthday');
            $table->integer('gender');
            $table->string('address',191);
            $table->string('email',191);
            $table->string('phone',191);
            $table->integer('class_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->text('note');
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
}
