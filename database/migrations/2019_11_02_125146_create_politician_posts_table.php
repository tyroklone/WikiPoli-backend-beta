<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliticianPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politician_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('politician_id')->nullable();
            $table->unsignedBigInteger('post_id')->nullable();
            $table->timestamps();
            $table->foreign('politician_id')
                    ->references('id')->on('politicians')->onUpdate('cascade');
            $table->foreign('post_id')
                    ->references('id')->on('posts')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('politician_posts');
    }
}
