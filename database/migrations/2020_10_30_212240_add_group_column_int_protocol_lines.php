<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGroupColumnIntProtocolLines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('protocol_lines', function (Blueprint $table) {
            $table->addColumn('integer', 'group_id')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('protocol_lines', function (Blueprint $table) {
            $table->dropColumn('group_id');
        });
    }
}
