<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company_name');
            $table->string('phone_number');
            $table->string('phone_number_2')->nullable();
            $table->string('email');
            $table->string('fax_number')->nullable();
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('zip_code_1');
            $table->string('zip_code_2')->nullable();
            $table->string('residence_1');
            $table->string('residence_2')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
