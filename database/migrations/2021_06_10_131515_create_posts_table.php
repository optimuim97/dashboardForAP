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
            $table->id();
            $table->integer('user_id');
            $table->bigInteger('entity_id');
            $table->string('body');
            $table->string('publisher_name');
            $table->string('publisher_id');
            $table->string('cover');
            $table->string('image')->nullable();
            $table->boolean('is_publish');
            $table->boolean('is_visible_by_user');
            $table->boolean('is_visible_by_agent');
            $table->boolean('is_draft');
            $table->date('expiration_date');
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
