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
        Schema::create('tbl_pengurus', function (Blueprint $table) {
            $table->id();
            $table->char('kd_pengurus', 100);
            $table->char('nama', 200);
            $table->char('jabatan', 200);
            $table->char('no_hp',200);
            $table->enum('login_akses',["admin","operator","no"]);
            $table->text('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pengurus');
    }
};
