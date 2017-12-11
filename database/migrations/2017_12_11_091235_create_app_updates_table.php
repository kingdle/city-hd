<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_updates', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('status')->default(1)->comment('是否自动更新');
            $table->string('version')->unique()->comment('版本号');
            $table->string('title');
            $table->string('note');
            $table->string('url')->comment('下载地址');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_updates');
    }
}
