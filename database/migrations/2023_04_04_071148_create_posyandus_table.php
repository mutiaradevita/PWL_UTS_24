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
        Schema::create('posyandus', function (Blueprint $table) {
            $table->string("no_urut", 10);
            $table->string("nama", 50);
            $table->string("alamat", 50);
            $table->string("tanggal_lahir", 10);
            $table->string("bb_lahir", 10);
            $table->string("tb_lahir", 10);
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
        Schema::dropIfExists('posyandus');
    }
};
