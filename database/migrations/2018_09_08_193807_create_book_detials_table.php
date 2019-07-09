<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookDetialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_detials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');

        $table->unsignedInteger('book_id');
        $table->string('image1');
        $table->string('image2');
        $table->string('image3');
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
        Schema::dropIfExists('book_detials');
    }
}
