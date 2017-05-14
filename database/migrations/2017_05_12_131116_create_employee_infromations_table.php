<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeInfromationsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_infromations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pf_number');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('department');
            $table->string('designation');
            $table->string('mobile');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_infromations');
    }
}
