<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangenullInComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->longText('thumb')->nullable()->change();
            $table->string('series', 100)->nullable()->change();
            $table->date('sale_date')->nullable()->change();
            $table->string('type', 100)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->longText('thumb');
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 100);
        });
    }
}
