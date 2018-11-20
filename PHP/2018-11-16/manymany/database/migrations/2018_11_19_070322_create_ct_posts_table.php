<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_posts', function (Blueprint $table) {
           
            $table->unsignedInteger('ct_id');
            $table->foreign('ct_id')->references('id')->on('categories');

            $table->unsignedInteger('p_id');
            $table->foreign('p_id')->references('id')->on('posts');
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
        Schema::dropIfExists('ct_posts');
    }
}
