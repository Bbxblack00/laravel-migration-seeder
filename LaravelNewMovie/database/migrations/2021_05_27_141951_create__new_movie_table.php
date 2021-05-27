<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_new_movie', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 128);
            $table->string('description')->nullable();
            $table->date('date');
            $table->integer('vote');
            
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
        Schema::dropIfExists('_new_movie');
    }
}
