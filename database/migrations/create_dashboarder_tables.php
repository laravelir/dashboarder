<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboarderTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('dashboarder_cruds')) {
            Schema::create('dashboarder_cruds', function (Blueprint $table) {
                $table->id();
                $table->uuid('uuid');
                $table->string('name')->unique(); // posts
                $table->string('model')->unique(); // \App\Models\Post::class
                $table->string('route_title')->unique(); // posts for resources routes
                $table->string('icon')->nullable(); // icon for menus
                $table->boolean('active')->default(true);
                $table->timestamps();
            });
        }

        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                if (!Schema::hasColumn('users', 'uuid')) {
                    $table->uuid('uuid')->after('id');
                }
            });
        }

        if (!Schema::hasTable('countries')) {
            Schema::create('countries', function (Blueprint $table) {
                $table->increments('id');
                $table->uuid('uuid');
                $table->string('name')->unique();
                $table->string('code')->unique();
                $table->string('flag')->nullable();
                $table->string('capital')->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cruds');
        Schema::dropIfExists('countries');

        if (Schema::hasColumn('users', 'uuid')) {
            Schema::table('users', function ($table) {
                $table->dropColumn('uuid');
            });
        }
    }
}
