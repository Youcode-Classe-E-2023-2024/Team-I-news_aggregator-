<?php
// database/migrations/YYYY_MM_DD_HHMMSS_drop_slug_column_from_itemcomments_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropSlugColumnFromItemcommentsTable extends Migration
{
    public function up()
    {
        Schema::table('itemcomments', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }

    public function down()
    {
        Schema::table('itemcomments', function (Blueprint $table) {
            $table->string('slug')->unique()->after('msgsender')->nullable();
        });
    }
}
