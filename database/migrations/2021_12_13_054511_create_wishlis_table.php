<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlis', function (Blueprint $table) {
            $table->id();
            $table->integer("pid");
            $table->integer("cid");
            $table->string("pname");
            $table->string("pimage");
            $table->string("prize");
            $table->string("status")->default('Wishlist');
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
        Schema::dropIfExists('wishlis');
    }
}
