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
            $table->bigInteger('user_id')->nullable();
            $table->string('title');
            $table->string('position');
            $table->string('responsibilities');
            $table->string('qualifications');
            $table->float('min_salary',10,2);
            $table->float('max_salary',10,2);
            $table->string('schedule');
            $table->text('body');
            $table->string('state');
            $table->string('city');
            $table->integer('active');
            $table->timestamps();
//            $table->foreign('user_id')->references('id')->on('users');
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
