<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsSystemInfoForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // vastleggen van de relatie tussen games en publishers
        Schema::table('client_project', function (Blueprint $table) {

            $table->foreign('system_info_id')
                ->references('id')
                ->on('system_information')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_project');
    }
}
