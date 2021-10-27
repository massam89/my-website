<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerTable extends Migration
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
            $table->string('address');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->mediumText('about_text1')->nullable();
            $table->string('about_header')->nullable();
            $table->mediumText('about_text2')->nullable();
            $table->mediumText('about_text3')->nullable();
            $table->mediumText('facts_text')->nullable();
            $table->mediumText('skills_text')->nullable();
            $table->mediumText('resume_text')->nullable();
            $table->mediumText('portfolio_text')->nullable();
            $table->mediumText('services_text')->nullable();
            $table->mediumText('testimonials_text')->nullable();
            $table->mediumText('contact_text')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('bg_url')->nullable();
            $table->string('favicon_url')->nullable();    
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
        Schema::dropIfExists('owner');
    }
}
