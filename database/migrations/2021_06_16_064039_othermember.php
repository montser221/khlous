<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Othermember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          // `reportImageFile`, `reportPdfFile`, `reportStatus`,
          Schema::create('other_members', function (Blueprint $table) {
            $table->id('memId');
            $table->string('memName');
            $table->string('memEmail')->nullable();
            $table->string('memPhone')->nullable();
            $table->string('memFile')->nullable();
            $table->tinyInteger('memStatus')->default(0);
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
        Schema::dropIfExists('other_members');
    }
}
