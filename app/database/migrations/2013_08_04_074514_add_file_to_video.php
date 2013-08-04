<?php

use Illuminate\Database\Migrations\Migration;

class AddFileToVideo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('videos', function($table)	{
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
		Schema::table('videos', function($table){
		    $table->dropColumn('file');
		});
	}

}