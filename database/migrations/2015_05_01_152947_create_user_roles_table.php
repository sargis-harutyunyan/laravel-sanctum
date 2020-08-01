<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("user_roles", function(Blueprint $table)
		{
			$table->increments("id");
			$table->integer("user_id")->unsigned()->index();
			$table->integer("account_id")->unsigned()->index();

			$table->text("roles");

			$table->timestamps();
		});

		Schema::table("user_roles", function($table) {
			$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
			$table->foreign("account_id")->references("id")->on("accounts")->onDelete("cascade");
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("user_roles");
	}
}