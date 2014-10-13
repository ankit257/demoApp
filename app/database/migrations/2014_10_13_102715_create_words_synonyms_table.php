<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsSynonymsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('words_synonyms', function($t) {
              // auto increment id (primary key)
              $t->increments('id');
              $t->integer('word_id');
              $t->integer('synonym_id');
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
		Schema::drop('words_synonyms');
	}

}
