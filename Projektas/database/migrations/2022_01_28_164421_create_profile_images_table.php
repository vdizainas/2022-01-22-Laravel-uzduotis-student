<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_images', function (Blueprint $table) {
            $table->id();

            $tabel->string('alt');
            $tabel->string('src');
            $tabel->string('whidth');
            $tabel->string('height');
            $tabel->string('phone');
            $tabel->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('profile_images');

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
        Schema::dropIfExists('profile_images');
    }
}
