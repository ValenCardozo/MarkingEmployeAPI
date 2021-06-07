<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Markings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markings', function (Blueprint $table) {
            $table->increments('id');
            /*$table->foreign('employee_id')->reference('id')->on('employees');*/
            $table->date('marking_employee');
            $table->date('marking_date');
            $table->dateTime('marking_in');
            $table->dateTime('marking_out');
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
        Schema::dropDatabaseIfExists('markings');
    }
}
