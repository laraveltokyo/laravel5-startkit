<?php

namespace App\Database\Migrations;

use Jumilla\Versionia\Laravel\Support\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class App_1_0 extends Migration
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
            'framework' => 1.0,
            'auth' => 1.0,
        ];
    }

    /**
     * Upgrade database.
     *
     * @return void
     */
    public function up()
    {
//        $this->createTable();
    }

    /**
     * Downgrade database.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('xxx');
    }

    /**
     * Create 'xxx' table.
     *
     * @return void
     */
    protected function createTable()
    {
        Schema::create('xxx', function (Blueprint $table) {
        });
    }
}
