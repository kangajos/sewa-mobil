<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewaMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa_mobils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("master_mobil_id");
            $table->unsignedBigInteger("user_id");
            $table->string("status");
            $table->timestamps();
            $table->foreign("master_mobil_id")->references("id")->on("master_mobils");
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewa_mobils');
    }
}
