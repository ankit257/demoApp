<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsAntonymsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('words_antonyms', function($t) {
              // auto increment id (primary key)
              $t->increments('id');
              $t->integer('word_id');
              $t->integer('antonym_id');
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
		Schema::drop('words_antonyms');
	}

}
