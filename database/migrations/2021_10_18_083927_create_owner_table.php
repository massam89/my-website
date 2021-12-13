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
            $table->string('name')->nullable();
            $table->string('name_fa')->nullable();
            $table->string('expertises')->nullable();
            $table->string('expertises_fa')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('city_fa')->nullable();
            $table->string('degree')->nullable();
            $table->string('degree_fa')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('address_fa')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->mediumText('about_text1')->nullable();
            $table->mediumText('about_text1_fa')->nullable();
            $table->string('about_header')->nullable();
            $table->string('about_header_fa')->nullable();
            $table->mediumText('about_text2')->nullable();
            $table->mediumText('about_text2_fa')->nullable();
            $table->mediumText('about_text3')->nullable();
            $table->mediumText('about_text3_fa')->nullable();
            $table->mediumText('facts_text')->nullable();
            $table->mediumText('facts_text_fa')->nullable();
            $table->mediumText('skills_text')->nullable();
            $table->mediumText('skills_text_fa')->nullable();
            $table->mediumText('resume_text')->nullable();
            $table->mediumText('resume_text_fa')->nullable();
            $table->mediumText('portfolio_text')->nullable();
            $table->mediumText('portfolio_text_fa')->nullable();
            $table->mediumText('services_text')->nullable();
            $table->mediumText('services_text_fa')->nullable();
            $table->mediumText('testimonials_text')->nullable();
            $table->mediumText('testimonials_text_fa')->nullable();
            $table->mediumText('contact_text')->nullable();
            $table->mediumText('contact_text_fa')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('bg_url')->nullable();
            $table->string('favicon_url')->nullable();    
            $table->string('resume_url')->nullable();    
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
