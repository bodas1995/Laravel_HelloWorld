<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {



            $table->bigIncrements('id');
            $table->unsignedBigInteger('user id');
            $table->timestamps();
            $table->text('text');

            // Add index to user_id field
            $table->index('user id');

            // Add foreign key constraint to user_id field
            $table->foreign('user id')->references('id')->on('users')->onDelete('cascade');
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
};
