<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountiesTable extends Migration
{
    public function up()
    {
        Schema::create('counties', function (Blueprint $table) {
            $table->increments('id');

            $table->string('abbreviation', 2);
            $table->string('name');

            $table->boolean('is_active');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('counties');
    }
}
