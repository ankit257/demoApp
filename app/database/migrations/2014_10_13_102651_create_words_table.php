<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('words', function($t) {
              // auto increment id (primary key)
              $t->increments('id');
              $t->string('word', 128);
              $t->integer('diff_level');
              $t->boolean('active')->default(1);
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
		Schema::drop('words');
	}

}
