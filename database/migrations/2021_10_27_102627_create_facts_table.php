<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('clients_number')->nullable();
            $table->bigInteger('clients_number_fa')->nullable();
            $table->string('clients_title')->nullable();
            $table->string('clients_title_fa')->nullable();
            $table->bigInteger('projects_number')->nullable();
            $table->bigInteger('projects_number_fa')->nullable();
            $table->string('projects_title')->nullable();
            $table->string('projects_title_fa')->nullable();
            $table->bigInteger('hours_number')->nullable();
            $table->bigInteger('hours_number_fa')->nullable();
            $table->string('hours_title')->nullable();
            $table->string('hours_title_fa')->nullable();
            $table->bigInteger('workers_number')->nullable();
            $table->bigInteger('workers_number_fa')->nullable();
            $table->string('workers_title')->nullable();
            $table->string('workers_title_fa')->nullable();
            $table->timestamps();
        });

        DB::table('facts')->insert([
            [
            'clients_number' => 111, 
            'clients_number_fa' => 112, 
            'clients_title' => 'Clients', 
            'clients_title_fa' => 'مشتری ها', 
            'projects_number' => 221, 
            'projects_number_fa' => 222, 
            'projects_title' => 'Projects', 
            'projects_title_fa' => 'پروژه ها', 
            'hours_number' => 331, 
            'hours_number_fa' => 332, 
            'hours_title' => 'Hours', 
            'hours_title_fa' => 'ساعت ها', 
            'workers_number' => 441, 
            'workers_number_fa' => 442, 
            'workers_title' => 'Workers',
            'workers_title_fa' => 'پرسنل'
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
        Schema::dropIfExists('facts');
    }
}
