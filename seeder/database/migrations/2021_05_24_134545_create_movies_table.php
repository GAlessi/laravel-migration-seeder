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

                $table -> string('title', 100) -> nullable();
                $table -> string('original_title', 100) -> nullable();
                $table -> string('nationality', 20) -> nullable();
                $table -> date('date') -> nullable();
                $table -> float('vote', 2, 1) -> nullable();

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
        Schema::dropIfExists('movies');
    }
}
