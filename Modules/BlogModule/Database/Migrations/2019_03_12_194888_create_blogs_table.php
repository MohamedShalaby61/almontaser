<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Here i have data that won't be translated,
         * like: [id, code, ...].
         */
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_of_view')->default(0);
            $table->string('is_featured')->default(0);
            $table->string('photo')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('set null');

            $table->timestamps();
        });
        /**
         * but here, i Have the data that i want to Translate.
         *
         * Here is the Game.
         */
        Schema::create('blog_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id')->unsigned();
            $table->string('title')->nullable();
            $table->longText('short_desc')->nullable();
            $table->longText('tags')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_desc')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('locale')->index();
            $table->unique(['blog_id', 'locale']);
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });

        Schema::create('blog_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->integer('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->references('id')->on('blog_categories')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('blog_translations');
        Schema::dropIfExists('blog_category');
    }
}
