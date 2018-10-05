<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_information', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->string('name');
            $table->string('company_name');
            $table->string('phone_number');
            $table->boolean('creditworthy');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('zip_code_1');
            $table->string('zip_code_2');
            $table->string('residence_1');
            $table->string('residence_2');
            $table->string('phone_number_1');
            $table->string('phone_number_2');
            $table->string('fax_number');
            $table->string('email');
            $table->date('last_contact_date');
            $table->date('next_appointment');
            $table->date('date_of_appointment');
            $table->boolean('prospect');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_information');
    }
}
