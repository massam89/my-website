<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('expertises');
            $table->date('birthdate');
            $table->string('website');
            $table->string('phone');
            $table->string('city');
            $table->string('degree');
            $table->string('email');
            $table->string('avatar_url');
            $table->string('bg_url');
            $table->string('address');
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
        Schema::dropIfExists('owners');
    }
}
