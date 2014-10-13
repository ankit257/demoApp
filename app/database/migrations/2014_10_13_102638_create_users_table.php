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
		//
		Schema::create('users', function($t) {
              // auto increment id (primary key)
              $t->increments('id');
              $t->string('username', 128);
              $t->string('name', 128);
              $t->string('email', 128);
              $t->boolean('active')->default(1);
              $t->integer('role_id')->unsigned();
              $t->text('bio');
              $t->timestamps();
          });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
