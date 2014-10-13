<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsMeaningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('words_meanings', function($t) {
              $t->increments('id');
              // auto increment id (primary key)
              $t->integer('word_id');
              $t->string('POS', 64);
              $t->text('meaning');
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
		Schema::drop('words_meanings');
	}

}
