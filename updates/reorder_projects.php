<?php

namespace Jagu\Venus\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class ReorderProjects extends Migration
{
    private const PROJECTS_TABLE = 'jagu_venus_projects';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::PROJECTS_TABLE, function (Blueprint $table) {
            $table->integer('sort_order')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::PROJECTS_TABLE, function (Blueprint $table) {
            $table->dropColumn('sort_order');
        });
    }
}
