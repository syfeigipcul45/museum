<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLinkMedia3dToBendaKoleksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('benda_koleksis', function (Blueprint $table) {
            $table->text('link_media3d')->nullable()->after('link_media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('benda_koleksis', function (Blueprint $table) {
            //
        });
    }
}
