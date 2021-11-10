<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVisibilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visibility', function (Blueprint $table) {
            $table->id();
            $table->boolean('about');
            $table->boolean('fact');
            $table->boolean('skill');
            $table->boolean('resume');
            $table->boolean('education');
            $table->boolean('experience');
            $table->boolean('portfolio');
            $table->boolean('service');
            $table->boolean('testimonial');
            $table->boolean('contact');
            $table->timestamps();
        });

        DB::table('visibility')->insert([
            [
                'about' => true,
                'fact' => true,
                'skill' => true,
                'resume' => true,
                'education' => true,
                'experience' => true,
                'portfolio' => true,
                'service' => true,
                'testimonial' => true,
                'contact' => true
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visibility');
    }
}
