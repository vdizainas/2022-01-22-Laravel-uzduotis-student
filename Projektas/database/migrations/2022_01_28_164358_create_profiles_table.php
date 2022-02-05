<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $tabel->string('name');
            $tabel->string('surname');
            $tabel->string('description');
            $tabel->string('email');
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
        Schema::dropIfExists('profiles');
    }
}
