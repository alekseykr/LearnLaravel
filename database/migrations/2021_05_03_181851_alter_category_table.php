<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCategoryTable extends Migration
{

    public function up()
    {
        Schema::table('category', function (Blueprint $table) {
            $table->string('slug');

        });
    }

    public function down()
    {
        Schema::table('category', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
