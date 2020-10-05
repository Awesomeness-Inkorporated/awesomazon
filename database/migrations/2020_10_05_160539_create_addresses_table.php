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
            $table->text('lat');
            $table->text('lng');
            $table->text('estate_name');
            $table->text('street');
            $table->text('city');
            $table->text('district');
            $table->text('state');
            $table->text('country');
            $table->text('zip');
            $table->text('phone');
            $table->text('email');
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
