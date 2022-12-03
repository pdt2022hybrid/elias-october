<?php namespace Openlab\Grade\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGradesTable extends Migration
{
    public function up()
    {
        Schema::create('openlab_grade_grades', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('grade');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('openlab_grade_grades');
    }
}
