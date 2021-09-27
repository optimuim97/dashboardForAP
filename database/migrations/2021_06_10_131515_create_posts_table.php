<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.x
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->bigInteger('entity_id')->nullable();
            $table->string('body');
            $table->string('publisher_name')->nullable();
            $table->string('publisher_id')->nullable();
            $table->string('cover')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_publish')->nullable();
            $table->boolean('is_visible_by_user')->nullable();
            $table->boolean('is_visible_by_agent')->nullable();
            $table->boolean('is_draft')->nullable();
            $table->dateTime('expiration_date')->nullable();
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
