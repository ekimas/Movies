<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('img', 20)->nullable()->default(NULL);
            $table->string('alt', 40)->nullable();
        });

        Schema::table('movies', function (Blueprint $table) {
            $table->unsignedBigInteger('director_id');
            
            $table->foreign('director_id')->references('id')->on('directors');
        });

        Schema::table('movies', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
