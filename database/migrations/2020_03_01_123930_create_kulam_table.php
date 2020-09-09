<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKulamTable extends Migration
{
     
    public function up()
    {
        Schema::create('kulam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();        
            $table->timestamps();
            $table->softDeletes();

             
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('kulam');
    }
}
