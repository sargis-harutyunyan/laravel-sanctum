<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->ipAddress('ip')->nullable();
            $table->integer('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->integer('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function(Blueprint $table)
        {
            $table->dropColumn([
                'ip',
                'stripe_id',
                'card_brand',
                'card_last_four',
                'trial_ends_at',
            ]);
        });
    }
}
