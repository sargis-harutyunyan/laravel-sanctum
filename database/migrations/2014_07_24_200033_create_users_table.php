<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('email')->unique();
			$table->string('password');
			$table->text('profile')->nullable();
			$table->text('preferences')->nullable();
			$table->boolean('activated')->default(false);
			$table->string('token')->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});

		Schema::create('throttle', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email');
			$table->string('ip_address')->nullable();
			$table->integer('attempts')->default(0);
			$table->boolean('suspended')->default(0);
			$table->boolean('banned')->default(0);
			$table->timestamp('last_attempt_at')->nullable();
			$table->timestamp('suspended_at')->nullable();
			$table->timestamp('banned_at')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("users");
		Schema::drop("throttle");
	}
}