<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsIntoAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->string('timezone')->nullable();
            $table->boolean('verified');
            $table->string('currency')->nullable();
            $table->boolean('premium');
            $table->string('settings')->nullable();
            $table->boolean('fixed_price');
            $table->string('billing_provider')->nullable();
            $table->integer('limit_sending');
            $table->integer('partner_id')->nullable();
            $table->integer('tax')->nullable();
            $table->integer('tax_id')->nullable();
            $table->decimal('price_per_contact', 8, 4);
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
                'timezone',
                'verified',
                'currency',
                'premium',
                'settings',
                'fixed_price',
                'billing_provider',
                'limit_sending',
                'partner_id',
                'tax',
                'tax_id',
                'price_per_contact'
            ]);
        });
    }
}
