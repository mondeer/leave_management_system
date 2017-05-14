<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveInformationsTable extends Migration
{
    public function up()
    {
        Schema::create('leave_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('leave_name');
            $table->integer('min_days');
            $table->integer('max_days');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leave_informations');
    }
}
