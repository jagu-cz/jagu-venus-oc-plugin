<?php

namespace Jagu\Venus\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class InitialDatabaseStructure extends Migration
{
    private const PROJECTS_TABLE = 'jagu_venus_projects';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::PROJECTS_TABLE, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('cover_image')->nullable();
            $table->json('data')->default('[]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::PROJECTS_TABLE);
    }
}