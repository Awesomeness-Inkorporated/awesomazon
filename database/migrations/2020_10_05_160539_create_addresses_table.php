<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->text('contact_name');
            $table->text('lat')->nullable();
            $table->text('lng')->nullable();
            $table->text('estate_name')->nullable();
            $table->text('street')->nullable();
            $table->text('city')->nullable();
            $table->text('district')->nullable();
            $table->text('state')->nullable();
            $table->text('country')->nullable();
            $table->text('zip')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
