<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
           // $table->integer('user_id');
            $table->integer('photo_id');
           // $table->integer('likes_id');
            $table->string('caption');
            //$table->string('user_id')->unassigned();
            /*$table->string('likes_id')->unassigned();
             $table->foreign('likes_id')->references('id')->on('user');*/
             // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
