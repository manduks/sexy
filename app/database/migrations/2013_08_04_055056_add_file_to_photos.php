<?php

use Illuminate\Database\Migrations\Migration;

class AddFileToPhotos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('photos', function($table)	{
	    	$table->string('file');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('photos', function($table){
		    $table->dropColumn('file');
		});
	}

}