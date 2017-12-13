<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConfirmationtokenApitokenToAdminUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_users', function (Blueprint $table) {
            $table->string('email')->nullable()->after('username');
            $table->string('confirmation_token')->nullable()->after('name');
            $table->string('api_token')->nullable()->after('remember_token');
            $table->boolean('is_active')->default(false)->after('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_users', function (Blueprint $table) {
            $table->dropColumn('email','confirmation_token','api_token','is_active');
        });
    }
}
