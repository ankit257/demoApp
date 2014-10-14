<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsExampleTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('words_example', function($t) {
              // auto increment id (primary key)
              $t->increments('id');
              $t->integer('word_id');
              $t->string('POS', 64);
              $t->string('example');
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
		Schema::create('words_example');
	}

}
