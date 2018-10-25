<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsProjectForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // vastleggen van de relatie tussen games en publishers
        Schema::table('projects', function (Blueprint $table) {

            $table->foreign('project_id')
                ->references('id')
                ->on('client_project')
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
        Schema::dropIfExists('projects');
    }
}
