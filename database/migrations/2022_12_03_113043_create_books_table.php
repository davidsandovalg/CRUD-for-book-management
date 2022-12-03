<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 500);
            $table->string('isbn')->unique();
            $table->integer('year_publication');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'foreign_book_users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->boolean('canceled')->default(false);
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
        Schema::dropIfExists('books');
    }
}
