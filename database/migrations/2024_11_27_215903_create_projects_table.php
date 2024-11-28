<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('timeline')->nullable();
            $table->text('goal')->nullable();
            $table->bigInteger('coordinator')->unsigned()->nullable();
            $table->bigInteger('electronics')->unsigned()->nullable();
            $table->bigInteger('firmware')->unsigned()->nullable();
            $table->bigInteger('tester')->unsigned()->nullable();
            $table->bigInteger('supplier')->unsigned()->nullable();
            $table->enum('status', ['Pending', 'In Progress', 'Completed'])->default('Pending');
            $table->timestamps();


            $table->foreign('coordinator')->references('id')->on('users')->onDelete('set null');
            $table->foreign('electronics')->references('id')->on('users')->onDelete('set null');
            $table->foreign('firmware')->references('id')->on('users')->onDelete('set null');
            $table->foreign('tester')->references('id')->on('users')->onDelete('set null');
            $table->foreign('supplier')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
