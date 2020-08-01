<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('created_by')->unsigned();
			$table->string('account')->index();

			# Application
			$table->integer("users");

			# Company
			$table->string("name")->nullable();
			$table->string("country")->nullable();
			$table->string("website")->nullable();
			$table->string("phone")->nullable();
			$table->string("employees")->nullable();

			# Billing
			$table->string('billing_email')->nullable();
			$table->string('billing_country')->nullable();
			$table->string('billing_city')->nullable();
			$table->string('billing_address')->nullable();
			$table->integer('billing_zipcode')->nullable();

			# Billing method
			$table->string('billing_method')->nullable();
			$table->string('billing_info')->nullable();

			# Credits
			$table->decimal('credits', 10, 4)->default(0);
			$table->decimal('total_credits', 10, 4)->default(0);

			# Stripe
			$table->string('stripe_id')->nullable();
			$table->string('card_brand')->nullable();
			$table->string('card_last_four')->nullable();
			$table->string('billed_at')->nullable();
			$table->timestamp('trial_ends_at')->nullable();

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
		Schema::drop('accounts');
	}
}