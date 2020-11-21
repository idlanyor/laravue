<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRombelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rombel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rombel');
            $table->string('seo_rombel');
            $table->unsignedBigInteger('id_jurusan');
            $table->foreign('id_jurusan')
            ->references('id')->on('jurusan')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('id_kelas');
            $table->foreign('id_kelas')
            ->references('id')->on('kelas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('rombel');
    }
}
