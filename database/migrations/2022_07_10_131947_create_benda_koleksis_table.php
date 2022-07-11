<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBendaKoleksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benda_koleksis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_benda')->nullable();
            $table->string('slug_koleksi')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategori_koleksis')->onDelete('cascade');
            $table->text('deskripsi')->nullable();
            $table->text('link_media')->nullable();
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
        Schema::dropIfExists('benda_koleksis');
    }
}
