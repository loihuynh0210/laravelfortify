<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->text('slug')->nullable();
            $table->text('title')->nullable();
            $table->text('intro')->nullable();
            $table->text('detail')->nullable();
            $table->date('start_date')->nullable();
            $table->string('image')->nullable();
            $table->json('showed');
            $table->boolean('confirmed');
            $table->unsignedTinyInteger('is_display')->comment('1.public/2.unpublic');
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
        Schema::dropIfExists('todos');
    }
}
