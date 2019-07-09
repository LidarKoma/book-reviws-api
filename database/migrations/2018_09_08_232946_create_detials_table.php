<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');

        $table->unsignedInteger('book_id');
        $table->string('image1');
        $table->string('image2');
        $table->string('image3');
        $table->string('image1m');
        $table->string('image2m');
        $table->string('image3m');
        $table->string('image1b');
        $table->string('image2b');
        $table->string('image3b');
        $table->string('video');


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
        Schema::dropIfExists('detials');
    }
}
