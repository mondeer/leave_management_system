<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecalledLeavesTable extends Migration
{

    public function up()
    {
        Schema::create('recalled_leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('leave_id');
            $table->integer('employee_id');
            $table->date('recall_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recalled_leaves');
    }
}
