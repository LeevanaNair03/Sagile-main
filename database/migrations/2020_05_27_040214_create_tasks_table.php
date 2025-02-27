<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->smallInteger('order')->default(0);
            $table->string('user_name');
            $table->string('status_name');
            $table->unsignedInteger('userstory_id');
            $table->unsignedInteger('sprint_id');
            $table->unsignedInteger('proj_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
