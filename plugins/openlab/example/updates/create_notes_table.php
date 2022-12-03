<?php namespace Openlab\Example\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('openlab_example_notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('content');
            $table->string('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('openlab_example_notes');
    }
}
