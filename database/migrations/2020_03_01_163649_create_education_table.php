<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
     
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150)->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

     
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
