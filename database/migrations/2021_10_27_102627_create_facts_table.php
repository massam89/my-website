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
            $table->bigInteger('clients_number');
            $table->string('clients_title');
            $table->bigInteger('projects_number');
            $table->string('projects_title');
            $table->bigInteger('hours_number');
            $table->string('hours_title');
            $table->bigInteger('workers_number');
            $table->string('workers_title');
            $table->timestamps();
        });

        DB::table('facts')->insert([
            ['clients_number' => 120, 'clients_title' => 'Clients', 'projects_number' => 20, 'projects_title' => 'Projects', 'hours_number' => 1200, 'hours_title' => 'Hours', 'workers_number' => 35, 'workers_title' => 'Workers']
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
