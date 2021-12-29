<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id('marks_id');
            $table->biginteger('marks');
            $table->string('index_no');
            $table->foreign('index_no')->references('index_no')->on('students')->onUpdata('cascade')->onDelete('cascade');
            $table->string('subject_id');
            $table->foreign('subject_id')->references('id')->idon('subjects')->onUpdata('cascade')->onDelete('cascade');
            $table->string('exam_id');
            $table->foreign('exam_id')->references('id')->on('exams')->onUpdata('cascade')->onDelete('cascade');
            $table->integer('grade_id')->unsigned();
            $table->foreign('grade_id')->references('id')->on('grades')->onUpdata('cascade')->onDelete('cascade');
            $table->timestamps('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
