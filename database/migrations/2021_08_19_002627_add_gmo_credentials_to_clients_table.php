<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGmoCredentialsToClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('gmo_site_id')->nullable();
            $table->string('gmo_site_pass')->nullable();
            $table->string('gmo_shop_id')->nullable();
            $table->string('gmo_shop_pass')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn([
                'gmo_site_id',
                'gmo_site_pass',
                'gmo_shop_id',
                'gmo_shop_pass',
            ]);
        });
    }
}
