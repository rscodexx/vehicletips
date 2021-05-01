<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->increments("id");
            $table->string("title");
            $table->string("vehicle");
            $table->string("brand");
            $table->string("version")->nullable();
            $table->string("body");
            $table->string("type");
            $table->integer("user_id")->unsigned();
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tips');
    }
}
