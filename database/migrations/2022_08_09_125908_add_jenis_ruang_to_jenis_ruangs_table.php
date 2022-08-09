<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisRuangToJenisRuangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jenis_ruangs', function (Blueprint $table) {
            $table->text('link_media')->nullable()->after('slug_jenis');
            $table->text('deskripsi')->nullable()->after('link_media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jenis_ruangs', function (Blueprint $table) {
            //
        });
    }
}
