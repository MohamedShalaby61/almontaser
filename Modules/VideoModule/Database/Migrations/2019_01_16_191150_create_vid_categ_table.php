<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVidCategTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videocategs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('set null');
            $table->timestamps();
        });

        # Translation
        Schema::create('videocateg_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('video_categ_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['video_categ_id', 'locale']);
            $table->foreign('video_categ_id')->references('id')->on('videocategs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videocategs');
        Schema::dropIfExists('videocateg_translation');
    }
}
