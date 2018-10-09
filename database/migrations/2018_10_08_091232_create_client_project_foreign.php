<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientProjectForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        // vastleggen van de relatie tussen games en publishers
        Schema::table('client_information', function (Blueprint $table) {

            $table->foreign('project_id')->references('id')->on('client_project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_information', function (Blueprint $table){
            $table->dropForeign(['project_id']);
        });
    }
}
