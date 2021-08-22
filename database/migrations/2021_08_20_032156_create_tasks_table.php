<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {

            
                $table->increments('TaskID');
                $table->string('TaskName');
                $table->string('Description');
                $table->string('AssignTo');
                $table->string('Image');
                $table->string('Status');
                $table->rememberToken();
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
        Schema::dropIfExists('tasks');
    }
}
