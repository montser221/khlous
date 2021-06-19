<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Money extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // `ReportId`, `reportTitle`,
        // `reportImageFile`, `reportPdfFile`, `reportStatus`,
        Schema::create('money', function (Blueprint $table) {
            $table->id('ReportId');
            $table->string('reportTitle');
            $table->string('reportImageFile')->nullable();
            $table->string('reportPdfFile');
            $table->tinyInteger('reportStatus')->default(0);
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
        Schema::table('money', function (Blueprint $table) {
            Schema::dropIfExists('money');
        });
    }
}
