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
            $table->id('projectId');
            $table->string('projectName');
            $table->unsignedBigInteger('projectCategoryId');
            $table->foreign('projectCategoryId')->references('categoryId')->on('projects_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('whatsapp')->nullable();
            $table->text('projectDesc');
            $table->string('projectLocation');
            $table->string('projectIcon');
            $table->string('projectImage');
            $table->text('projectText');
            $table->unsignedBigInteger('projectCost')->default(0);
            $table->tinyInteger('projectStatus')->default(0);
            // $table->tinyInteger('proinjectVip')->default(0);
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
        Schema::dropIfExists('projects');
    }
}
