<?php

namespace App\Database\Migrations;

use Jumilla\Versionia\Laravel\Support\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Framework_1_0 extends Migration
{
    /**
     * Define depends migration versions.
     * ex) ['auth' => 1.0].
     *
     * @return array
     */
    public function dependsTo()
    {
        return [
        ];
    }

    /**
     * Upgrade database.
     *
     * @return void
     */
    public function up()
    {
        $this->createCacheTable();
        $this->createSessionsTable();
        $this->createJobTables();
        $this->createNotificationTable();
    }

    /**
     * Downgrade database.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('jobs_failed');
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('cache');
    }

    /**
     * Create 'cache' table.
     *
     * @return void
     */
    protected function createCacheTable()
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->unique();
            $table->text('value');
            $table->integer('expiration');
        });
    }

    /**
     * Create 'sessions' table.
     *
     * @return void
     */
    protected function createSessionsTable()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->integer('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity');
        });
    }

    /**
     * Create 'jobs' table.
     *
     * @return void
     */
    protected function createJobTables()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('queue');
            $table->longText('payload');
            $table->tinyInteger('attempts')->unsigned();
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
            $table->index(['queue', 'reserved_at']);
        });

        Schema::create('jobs_failed', function (Blueprint $table) {
            $table->increments('id');
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Create 'notifications' table.
     *
     * @return void
     */
    protected function createNotificationTable()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('type');
            $table->morphs('notifiable');
            $table->text('data');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
        });
    }
}
