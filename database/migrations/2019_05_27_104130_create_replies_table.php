<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration 
{
    public function up()
    {
        Schema::create('replies', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->unsigned()->default(0)->index()->comment('话题 ID');
            $table->bigInteger('user_id')->unsigned()->default(0)->index()->comment('用户 ID');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('replies');
    }
}
