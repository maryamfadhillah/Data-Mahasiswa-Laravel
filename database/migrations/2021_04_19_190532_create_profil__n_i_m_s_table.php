<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilNIMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil__n_i_m_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nim');
            $table->string('nama');
            $table->integer('alamat');
            $table->string('bidang_peminatan');
            $table->string('email');
            $table->string('telp');
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
        Schema::dropIfExists('profil__n_i_m_s');
    }
}
